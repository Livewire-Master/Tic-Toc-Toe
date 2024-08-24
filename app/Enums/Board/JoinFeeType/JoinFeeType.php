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

    /**
     * @inheritDoc
     */
    public function reject(): bool
    {
        if ($this === self::AllIn)
            return true;

        if (auth()->user()->wallet->balance < $this->label())
            return true;

        return false;
    }
}
