<?php

namespace App\Enums\TransactionType;

enum TransactionType: string
{
    case Win = 'win';
    case Loss = 'loss';
    case Charge = 'charge';
    case Withdraw = 'withdraw';
}
