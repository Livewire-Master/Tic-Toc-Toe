<?php

namespace App\Enums\Board\GameRoundsType;

use App\Enums\Board\Concerns\GameBoardConcerns;

enum GameRoundsType: string
{
    use GameBoardConcerns;

    case Single = 'single';
    case Twin = 'twin';
    case Triple = 'triple';
    case Quad = 'quad';
    case Quint = 'quint';
}
