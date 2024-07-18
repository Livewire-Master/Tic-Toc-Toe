<?php

namespace App\Enums\Board\GameType;

use App\Enums\Board\Concerns\GameBoardConcerns;

enum GameType: string
{
    use GameBoardConcerns;

    case Freemium = 'freemium';
    case Gamble = 'gamble';
}
