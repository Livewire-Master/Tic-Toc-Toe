<?php

namespace App\Livewire\Page\Dashboard\Game;

use App\Enums\Board\GameRoundsType\GameRoundsType;
use App\Enums\Board\GameSpeedType\GameSpeedType;
use App\Enums\Board\GameType\GameType;
use App\Enums\Board\JoinFeeType\JoinFeeType;
use App\Enums\Board\OpponentType\OpponentType;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
#[Title('New Game')]
class CreatePage extends Component
{
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
        return [
            ...OpponentType::config(),
            ...GameType::config(),
            ...JoinFeeType::config('Your Balance: ' . auth()->user()->wallet->balance . ' coins'),
            ...GameSpeedType::config('Format: "Move:Bank" in seconds'),
            ...GameRoundsType::config(),
        ];
    }

    public function selectConfig(string $identifier, mixed $key): void
    {
        $this->config_data[$identifier] = $key;
    }
}
