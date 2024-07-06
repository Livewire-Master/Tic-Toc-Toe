<?php

namespace App\Models;

use App\Enums\TransactionStatus\TransactionStatus;
use App\Enums\TransactionType\TransactionType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
        'wallet_id',
        'amount',
        'transaction_type', // enum: win, loss, charge, withdraw
        'status', // enum: success, failed
    ];

    protected function casts(): array
    {
        return [
            'amount' => 'integer',
            'transaction_type' => TransactionType::class,
            'status' => TransactionStatus::class,
        ];
    }

    /**
     * Get the related wallet
     */
    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }
}
