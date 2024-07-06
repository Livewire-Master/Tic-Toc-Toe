<?php

namespace App\Livewire\Page\Dashboard;

use App\Enums\TransactionStatus\TransactionStatus;
use App\Enums\TransactionType\TransactionType;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;

/**
 * @property array $acceptedChargeAmounts
 * @property array $acceptedWithdrawAmounts
 * @property Collection $transactions
 */
#[Layout('components.layouts.dashboard')]
#[Title('Transactions')]
class TransactionPage extends Component
{
    #[Locked]
    public string $current_payment_tab = 'charge';

    #[Locked]
    public string $selected_charge_amount = '';

    #[Locked]
    public string $selected_withdraw_amount = '';

    public function switchPaymentTab(string $tab): void
    {
        $accepted_tabs = ['charge', 'withdraw'];

        if (in_array($tab, $accepted_tabs)) {
            $this->current_payment_tab = $tab;
        }
    }

    public function selectChargeAmount(string $amount): void
    {
        if (in_array($amount, $this->acceptedChargeAmounts)) {
            $this->selected_charge_amount = $amount;
        }
    }

    public function selectWithdrawAmount(string $amount): void
    {
        if (in_array($amount, $this->acceptedWithdrawAmounts)) {
            $this->selected_withdraw_amount = $amount;
        }
    }

    public function charge(): void
    {
        auth()->user()->wallet->transactions()->create(
            [
                'amount' => $this->selected_charge_amount,
                'transaction_type' => TransactionType::Charge,
                'status' => TransactionStatus::Success,
            ]
        );
    }

    public function withdraw(): void
    {
        auth()->user()->wallet->transactions()->create(
            [
                'amount' => $this->selected_withdraw_amount,
                'transaction_type' => TransactionType::Withdraw,
                'status' => TransactionStatus::Success,
            ]
        );
    }

    #[Computed]
    public function acceptedChargeAmounts(): array
    {
        return ['50', '100', '500', '1000', '2000', '4000'];
    }

    #[Computed]
    public function acceptedWithdrawAmounts(): array
    {
        return ['50', '100', '500', '1000', '2000', 'All-in'];
    }

    #[Computed]
    public function wallet()
    {
        return auth()->user()->wallet;
    }

    #[Computed]
    public function transactions()
    {
        return auth()->user()->wallet->transactions()->orderByDesc('created_at')->get();
    }

    #[Computed]
    public function lastTransaction()
    {
        return $this->transactions->first()?->created_at?->ago() ?? 'Never';
    }

    #[Computed]
    public function totalCharge()
    {
        return $this->total(TransactionType::Charge);
    }

    #[Computed]
    public function totalWithdraw()
    {
        return $this->total(TransactionType::Withdraw);
    }

    #[Computed]
    public function totalWin()
    {
        return $this->total(TransactionType::Win);
    }

    #[Computed]
    public function totalLoss()
    {
        return $this->total(TransactionType::Loss);
    }

    public function total(TransactionType $type)
    {
        return $this->transactions
            ->where('transaction_type', $type)
            ->where('status', TransactionStatus::Success)
            ->sum('amount');
    }
}
