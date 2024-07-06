<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Log;

class UserObserver
{
    public function created(User $user): void
    {
        Wallet::create(
            [
                'user_id' => $user->id,
                'balance' => 500
            ]
        );
    }
}
