<?php

namespace App\Enums\Board\GameStatus;

use App\Enums\Board\Concerns\GameBoardConcerns;

enum GameStatus: string
{
    use GameBoardConcerns;

    case Waiting = 'waiting';
    case Playing = 'playing';
    case Finished = 'finished';
    case Leaved = 'leaved';
}
