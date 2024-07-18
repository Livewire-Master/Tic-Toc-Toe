<?php

namespace App\Enums\Board\OpponentType;

use App\Enums\Board\Concerns\GameBoardConcerns;

enum OpponentType: string
{
    use GameBoardConcerns;

    case Person = 'person';
    case Computer = 'computer';
}
