<?php

namespace App\Enums\Board\WinnerType;

use App\Enums\Board\Concerns\GameBoardConcerns;

enum WinnerType: string
{
    use GameBoardConcerns;

    case Host = 'host';
    case Opponent = 'opponent';
}
