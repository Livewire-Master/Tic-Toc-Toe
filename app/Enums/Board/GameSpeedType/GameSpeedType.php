<?php

namespace App\Enums\Board\GameSpeedType;

use App\Enums\Board\Concerns\GameBoardConcerns;

enum GameSpeedType: string
{
    use GameBoardConcerns;

    case Speedy = 'speedy';
    case Balanced = 'balance';
    case Relaxed = 'relaxed';
    case Freeze = 'freeze';
}
