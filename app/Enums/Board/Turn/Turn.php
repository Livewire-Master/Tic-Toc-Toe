<?php

namespace App\Enums\Board\Turn;

use App\Enums\Board\Concerns\GameBoardConcerns;

enum Turn: string
{
    use GameBoardConcerns;

    case Host = 'host';
    case Opponent = 'opponent';
}
