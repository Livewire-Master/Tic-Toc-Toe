<?php

namespace App\Livewire\Page\Dashboard\Game;

use App\Enums\Board\GameRoundsType\GameRoundsType;
use App\Enums\Board\GameSpeedType\GameSpeedType;
use App\Enums\Board\GameStatus\GameStatus;
use App\Enums\Board\GameType\GameType;
use App\Enums\Board\JoinFeeType\JoinFeeType;
use App\Enums\Board\OpponentType\OpponentType;
use App\Enums\Board\Turn\Turn;
use App\Models\Board;
use BackedEnum;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
#[Title('New Game')]
class CreatePage extends Component
{
    /**
     * Mount the component
     */
    public function mount(): void
    {
        $board = Board::whereIn('status', [GameStatus::Waiting, GameStatus::Playing])
            ->where(function ($query) {
                return $query->where('host_id', auth()->id())
                    ->orWhere('opponent_id', auth()->id());
            })
            ->first();

        if ($board)
            $this->redirectRoute('page.dashboard.games.board', ['board' => $board->id]);
    }

    /**
     * Selected Configs
     */
    public array $config_data = [];

    /**
     * Get the configs list
     */
    #[Computed]
    public function configs(): array
    {
        $_ = [
            ...OpponentType::config(),
            ...GameType::config(),
        ];

        $addon = [];
        if (auth()->user()->wallet->balance > 0)
            $addon = [
                ...JoinFeeType::config('Your Balance: ' . auth()->user()->wallet->balance . ' coins')
            ];

        return array_merge($_, $addon, [
            ...GameSpeedType::config('Format: "Move:Bank" in seconds'),
            ...GameRoundsType::config(),
        ]);
    }

    public function selectConfig(string $identifier, mixed $key): void
    {
        $this->config_data[$identifier] = $key;
    }

    /**
     * Create a new game board
     */
    public function create(): void
    {
        $this->resetErrorBag();

        $has_error = false;

        $configs = [
            OpponentType::class,
            GameSpeedType::class,
            GameRoundsType::class,
        ];

        foreach ($configs as $config) {
            if (!$this->validated($config)) {
                $this->addError($config::identifier(), OpponentType::headline() . ' is required.');
                $has_error = true;
            }
        }

        if (auth()->user()->wallet->balance <= 0) {
            $this->config_data[JoinFeeType::identifier()] = null;
            $this->config_data[GameType::identifier()] = GameType::Freemium->key();
        }

        if ($has_error)
            return;

        $time = GameSpeedType::tryFrom($this->getConfig(GameSpeedType::class))->label();
        $pattern = '/\(\s*(\d+),\s*(\d+)\s*\)/';
        $round = 0;
        $bank = 0;

        if (preg_match($pattern, $time, $match)) {
            $round = (int)$match[1];
            $bank = (int)$match[2];
        }

        $hostPlaysFirst = (rand(1, 9999) % 2 === 0);
        $rounds_numeric = str_replace(' ', '', GameRoundsType::tryFrom($this->getConfig(GameRoundsType::class))->label());
        $rounds_numeric = explode(':', $rounds_numeric);
        $rounds_numeric = $rounds_numeric[1];

        $board = Board::create(
            [
                'host_id' => auth()->id(),
                'opponent_id' => null,
                'status' => GameStatus::Waiting,
                'winner' => null,
                'opponent_type' => $this->getConfig(OpponentType::class),
                'game_type' => $this->getConfig(GameType::class),
                'join_fee' => $this->getConfig(JoinFeeType::class),
                'join_fee_numeric' => $this->validated(JoinFeeType::class) ? JoinFeeType::tryFrom($this->getConfig(JoinFeeType::class))->label() : null,
                'speed' => $this->getConfig(GameSpeedType::class),
                'rounds' => $this->getConfig(GameRoundsType::class),
                'rounds_numeric' => $rounds_numeric,
                'current_round' => 1,
                'host_bank' => $bank,
                'opponent_bank' => $bank,
                'round_bank' => $round,
                'is_host_play_first' => $hostPlaysFirst,
                'turn' => $hostPlaysFirst ? Turn::Host : Turn::Opponent
            ]
        );

        $this->redirectRoute('page.dashboard.games.board', ['board' => $board->id], navigate: true);
    }

    protected function validated(string $enum): bool
    {
        return isset($this->config_data[$enum::identifier()]);
    }

    protected function getConfig(string $enum): mixed
    {
        return $this->config_data[$enum::identifier()];
    }
}
