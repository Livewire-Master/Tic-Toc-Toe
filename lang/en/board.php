<?php

use App\Enums\Board\GameRoundsType\GameRoundsType;
use App\Enums\Board\GameSpeedType\GameSpeedType;
use App\Enums\Board\GameType\GameType;
use App\Enums\Board\JoinFeeType\JoinFeeType;
use App\Enums\Board\OpponentType\OpponentType;

return [
    GameRoundsType::translationKey() => [
        GameRoundsType::translationHeadlineKey() => 'Game Rounds',
        GameRoundsType::translationLabelKey() => [
            GameRoundsType::Single->key() => 'Single: 1',
            GameRoundsType::Twin->key() => 'Twin: 2',
            GameRoundsType::Triple->key() => 'Triple: 3',
            GameRoundsType::Quad->key() => 'Quad: 4',
            GameRoundsType::Quint->key() => 'Quint: 5',
        ],
        GameRoundsType::translationColorKey() => [
            GameRoundsType::Single->key() => 'primary',
            GameRoundsType::Twin->key() => 'success',
            GameRoundsType::Triple->key() => 'warning',
            GameRoundsType::Quad->key() => 'accent',
            GameRoundsType::Quint->key() => 'danger',
        ],
    ],

    GameSpeedType::translationKey() => [
        GameSpeedType::translationHeadlineKey() => 'Game Speed',
        GameSpeedType::translationLabelKey() => [
            GameSpeedType::Speedy->key() => 'Speedy: (10, 100)',
            GameSpeedType::Balanced->key() => 'Balanced: (20, 200)',
            GameSpeedType::Relaxed->key() => 'Relaxed: (30, 300)',
            GameSpeedType::Freeze->key() => 'Freeze: (60, 600)',
        ],
        GameSpeedType::translationColorKey() => [
            GameSpeedType::Speedy->key() => 'danger',
            GameSpeedType::Balanced->key() => 'success',
            GameSpeedType::Relaxed->key() => 'primary',
            GameSpeedType::Freeze->key() => 'warning',
        ],
    ],

    GameType::translationKey() => [
        GameType::translationHeadlineKey() => 'Game Type',
        GameType::translationLabelKey() => [
            GameType::Freemium->key() => 'Freemium',
            GameType::Gamble->key() => 'Gamble',
        ],
        GameType::translationColorKey() => [
            GameType::Freemium->key() => 'success',
            GameType::Gamble->key() => 'primary',
        ],
    ],

    JoinFeeType::translationKey() => [
        JoinFeeType::translationHeadlineKey() => 'Join Fee (Bet)',
        JoinFeeType::translationLabelKey() => [
            JoinFeeType::Five->key() => '5',
            JoinFeeType::Ten->key() => '10',
            JoinFeeType::TwentyFive->key() => '25',
            JoinFeeType::Fifty->key() => '50',
            JoinFeeType::AllIn->key() => 'All-in',
        ],
        JoinFeeType::translationColorKey() => [
            JoinFeeType::Five->key() => 'success',
            JoinFeeType::Ten->key() => 'accent',
            JoinFeeType::TwentyFive->key() => 'info',
            JoinFeeType::Fifty->key() => 'warning',
            JoinFeeType::AllIn->key() => 'danger',
        ],
    ],

    OpponentType::translationKey() => [
        OpponentType::translationHeadlineKey() => 'Opponent',
        OpponentType::translationLabelKey() => [
            OpponentType::Person->key() => 'Person',
            OpponentType::Computer->key() => 'Computer',
        ],
        OpponentType::translationColorKey() => [
            OpponentType::Person->key() => 'success',
            OpponentType::Computer->key() => 'danger',
        ],
    ],
];
