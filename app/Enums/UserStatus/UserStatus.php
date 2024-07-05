<?php

namespace App\Enums\UserStatus;

enum UserStatus: int
{
    case Away = 0;
    case Idle = 1;
    case Playing = 2;
}
