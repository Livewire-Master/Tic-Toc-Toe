<?php

namespace App\Enums\GameConfig;

enum GameConfig: string
{
    case Opponent = 'opponent';
    case GameType = 'game_type';
    case JoinFee = 'join_fee';
    case GameSpeed = 'game_speed';
    case GameRounds = 'game_rounds';

    /**
     * Get the value as key
     */
    public function key(): string
    {
        return $this->value;
    }
}
