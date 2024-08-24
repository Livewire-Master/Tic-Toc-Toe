<?php

namespace App\Livewire\Page\Dashboard;

use App\Enums\Board\GameStatus\GameStatus;
use App\Enums\Board\OpponentType\OpponentType;
use App\Models\Board;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
#[Title('Games')]
class GamesPage extends Component
{
    #[Computed]
    public function totalPlays(): int
    {
        return Board::whereIn('status', [GameStatus::Finished, GameStatus::Leaved])->count();
    }

    #[Computed]
    public function totalBet(): int
    {
        return Board::sum('join_fee_numeric');
    }

    #[Computed]
    public function availableBoards(): int
    {
        return $this->boards->count();
    }

    #[Computed]
    public function boards(): Collection
    {
        return Board::where('status', GameStatus::Waiting)
            ->where('opponent_type', OpponentType::Person)
            ->get();
    }

    #[Computed]
    public function canJoin(): bool
    {
        return empty($this->latestContinuableBoard);
    }

    #[Computed]
    public function latestContinuableBoard(): ?int
    {
        return Board::whereIn('status', [GameStatus::Waiting, GameStatus::Playing])
            ->where(function ($query) {
                return $query->where('host_id', auth()->id())
                    ->orWhere('opponent_id', auth()->id());
            })
            ->first()
            ?->id;
    }

    public function joinBoard(int $id): void
    {
        $board = Board::where('status', GameStatus::Waiting)
            ->where('opponent_type', OpponentType::Person)
            ->where('id', $id)
            ->first();

        if (!$board)
            return;

        $board->update(
            [
                'status' => GameStatus::Playing,
                'opponent_id' => auth()->id(),
            ]
        );

        $this->redirectRoute('page.dashboard.games.board', ['board' => $board->id], navigate: true);
    }
}
