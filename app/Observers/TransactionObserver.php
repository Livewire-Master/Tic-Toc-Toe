<?php

namespace App\Observers;

use App\Enums\TransactionStatus\TransactionStatus;
use App\Enums\TransactionType\TransactionType;
use App\Models\Transaction;

class TransactionObserver
{
    public function created(Transaction $transaction): void
    {
        if ($transaction->status !== TransactionStatus::Success)
        {
            return;
        }

        $positive = [TransactionType::Charge, TransactionType::Win];
        $negative = [TransactionType::Withdraw, TransactionType::Loss];
        $balance = $transaction->wallet->balance;

        if (in_array($transaction->transaction_type, $positive))
        {
            $balance += $transaction->amount;
        }
        else if (in_array($transaction->transaction_type, $negative))
        {
            $balance -= $transaction->amount;
        }

        $transaction->wallet->update(
            [
                'balance' => $balance,
            ]
        );
    }
}
