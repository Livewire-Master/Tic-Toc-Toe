<?php

namespace App\Models;

use App\Enums\Board\GameRoundsType\GameRoundsType;
use App\Enums\Board\GameSpeedType\GameSpeedType;
use App\Enums\Board\GameStatus\GameStatus;
use App\Enums\Board\GameType\GameType;
use App\Enums\Board\JoinFeeType\JoinFeeType;
use App\Enums\Board\OpponentType\OpponentType;
use App\Enums\Board\Turn\Turn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Board extends Model
{
    protected $fillable = [
        'host_id',
        'opponent_id',
        'status',
        'winner',
        'opponent_type',
        'game_type',
        'join_fee',
        'join_fee_numeric',
        'speed',
        'rounds',
        'rounds_numeric',
        'current_round',
        'host_bank',
        'opponent_bank',
        'round_bank',
        'is_host_play_first',
        'turn',
    ];

    protected function casts(): array
    {
        return [
            'status' => GameStatus::class,
            'opponent_type' => OpponentType::class,
            'game_type' => GameType::class,
            'join_fee' => JoinFeeType::class,
            'speed' => GameSpeedType::class,
            'rounds' => GameRoundsType::class,
            'winner' => Turn::class,
            'turn' => Turn::class,
        ];
    }

    public function host(): BelongsTo
    {
        return $this->belongsTo(User::class, 'host_id', 'id');
    }

    public function opponent(): BelongsTo
    {
        return $this->belongsTo(User::class, 'opponent_id', 'id');
    }
}
