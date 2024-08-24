<?php

namespace App\Enums\Board\GameType;

use App\Enums\Board\Concerns\GameBoardConcerns;

enum GameType: string
{
    use GameBoardConcerns;

    case Freemium = 'freemium';
    case Gamble = 'gamble';

    /**
     * Reject logic
     */
    public function reject(): bool
    {
        if ($this === self::Gamble)
        {
            return auth()->user()->wallet->balance <= 0;
        }

        return false;
    }
}
