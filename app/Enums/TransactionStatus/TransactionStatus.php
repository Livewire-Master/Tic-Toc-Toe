<?php

namespace App\Enums\TransactionStatus;

enum TransactionStatus: string
{
    case Success = 'success';
    case Failed = 'failed';
}
