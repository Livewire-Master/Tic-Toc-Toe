<?php

namespace App\Observers;

use App\Models\Transaction;
use Illuminate\Support\Facades\Log;

class TransactionObserver
{
    public function created(Transaction $transaction): void
    {
        Log::debug('transaction created.');
    }
}
