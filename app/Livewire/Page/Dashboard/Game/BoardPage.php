<?php

namespace App\Livewire\Page\Dashboard\Game;

use App\Enums\Board\GameStatus\GameStatus;
use App\Enums\Board\Turn\Turn;
use App\Models\Board;
use App\Models\BoardEvent;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
#[Title('Board')]
class BoardPage extends Component
{
    #[Locked]
    public Board $board;

    #[Computed]
    public function plays(): array
    {
        return BoardEvent::where('board_id', $this->board->id)
            ->where('round', $this->board->current_round)
            ->get()
            ->mapWithKeys(function (BoardEvent $event) {
                return [$event->cell => $event->toArray()];
            })
            ->toArray();
    }

    public function play(int $row, int $col): void
    {
        if ($this->board->status !== GameStatus::Playing)
            return;

        $turn = null;

        if ($this->board->turn === Turn::Host && auth()->id() === $this->board->host_id)
            $turn = Turn::Host;
        else if ($this->board->turn === Turn::Opponent && auth()->id() === $this->board->opponent_id)
            $turn = Turn::Opponent;

        if (empty($turn))
            return;

        $event = BoardEvent::where('board_id', $this->board->id)
            ->where('round', $this->board->current_round)
            ->where('row', $row)
            ->where('col', $col)
            ->first();

        if ($event)
            return;

        BoardEvent::create(
            [
                'board_id' => $this->board->id,
                'round' => $this->board->current_round,
                'played_by' => $turn,
                'cell' => $row . 'x' . $col,
                'row' => $row,
                'col' => $col,
            ]
        );

        $events = BoardEvent::where('board_id', $this->board->id)
            ->where('round', $this->board->current_round)
            ->get();

        if ($events->count() >= 4)
        {
            $winner = $this->checkForWinner($events);
            if ($winner)
            {
                if ($this->board->current_round < $this->board->rounds_numeric)
                    $this->board->increment('current_round');
                else
                    $this->board->update(
                        [
                            'status' => GameStatus::Finished,
                            'winner' => $winner,
                        ]
                    );
            }
        }

        $this->board->update(
            [
                'turn' => $this->board->turn === Turn::Host ? Turn::Opponent : Turn::Host,
            ]
        );
    }

    #[Computed]
    public function me(): Turn
    {
        if ($this->board->host_id === auth()->id())
            return Turn::Host;
        else
            return Turn::Opponent;
    }

    #[Computed]
    public function myItem(): string
    {
        if ($this->me === Turn::Host && $this->board->is_host_play_first)
            return 'o';
        else
            return 'x';
    }

    #[Computed]
    public function opItem(): string
    {
        return $this->myItem === 'x' ? 'o' : 'x';
    }

    protected function checkForWinner(Collection $events): ?Turn
    {
        $winningConditions = [
            // Rows
            ['1x1', '1x2', '1x3'],
            ['2x1', '2x2', '2x3'],
            ['3x1', '3x2', '3x3'],
            // Columns
            ['1x1', '2x1', '3x1'],
            ['1x2', '2x2', '3x2'],
            ['1x3', '2x3', '3x3'],
            // Diagonals
            ['1x1', '2x2', '3x3'],
            ['1x3', '2x2', '3x1']
        ];

        $players = [Turn::Host->key(), Turn::Opponent->key()];

        $events = $events->mapWithKeys(fn($event) => [$event->cell => $event])->toArray();

        foreach ($players as $player)
        {
            foreach ($winningConditions as $condition) {
                if (isset($events[$condition[0]]) && $events[$condition[0]]['played_by'] === $player &&
                    isset($events[$condition[1]]) && $events[$condition[1]]['played_by'] === $player &&
                    isset($events[$condition[2]]) && $events[$condition[2]]['played_by'] === $player) {
                    return Turn::tryFrom($player);
                }
            }
        }

        return null;
    }
}
