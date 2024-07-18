<?php

namespace App\Enums\Board\JoinFeeType;

use App\Enums\Board\Concerns\GameBoardConcerns;

enum JoinFeeType: string
{
    use GameBoardConcerns;

    case Five = 'five';
    case Ten = 'ten';
    case TwentyFive = 'twenty-five';
    case Fifty = 'fifty';
    case AllIn = 'all-in';
}
