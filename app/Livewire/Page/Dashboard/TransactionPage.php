<?php

namespace App\Livewire\Page\Dashboard;

use App\Enums\TransactionStatus\TransactionStatus;
use App\Enums\TransactionType\TransactionType;
use App\Models\Wallet;
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
 * @property Wallet $wallet
 */
#[Layout('components.layouts.dashboard')]
#[Title('Transactions')]
class TransactionPage extends Component
{
    #region Properties
    /**
     * Current Payment Tab
     */
    #[Locked]
    public string $current_payment_tab = 'charge';

    /**
     * Selected Charge Amount
     */
    #[Locked]
    public string $selected_charge_amount = '';

    /**
     * Selected Withdraw amount
     */
    #[Locked]
    public string $selected_withdraw_amount = '';

    /**
     * User's wallet balance
     */
    #[Locked]
    public int $balance;
    #endregion

    #region Mount
    /**
     * Mount the component
     */
    public function mount(): void
    {
        $this->balance = $this->wallet->balance;
    }
    #endregion

    #region Charge and Withdraw
    #region Tab Switcher
    /**
     * Handle tab switch in payments section.
     * Tabs can get switched between charge and withdraw.
     */
    public function switchPaymentTab(string $tab): void
    {
        $accepted_tabs = ['charge', 'withdraw'];
        if ($tab === $this->current_payment_tab)
            return;

        if (in_array($tab, $accepted_tabs)) {
            $this->current_payment_tab = $tab;
        }

        $this->reset('selected_withdraw_amount', 'selected_charge_amount');
    }
    #endregion

    #region Charge Process
    /**
     * Array of accepted charge amounts to validate and show
     * user selection for charging their wallet.
     */
    #[Computed]
    public function acceptedChargeAmounts(): array
    {
        return ['50', '100', '500', '1000', '2000', '4000'];
    }

    /**
     * Specify a selection based on the accepted charge amounts.
     */
    public function selectChargeAmount(string $amount): void
    {
        if (in_array($amount, $this->acceptedChargeAmounts)) {
            $this->selected_charge_amount = $amount;
        }
    }

    /**
     * Handle payment and charge process request.
     */
    public function charge(): void
    {
        if (!in_array($this->selected_charge_amount, $this->acceptedChargeAmounts))
            return;

        auth()->user()->wallet->transactions()->create(
            [
                'amount' => $this->selected_charge_amount,
                'transaction_type' => TransactionType::Charge,
                'status' => TransactionStatus::Success,
            ]
        );

        $this->balance += (int)$this->selected_charge_amount;
        $this->reset('selected_charge_amount');
    }
    #endregion

    #region Withdraw Process
    /**
     * Array of accepted withdraw amounts to validate and show
     * user selection for withdrawal from their wallet.
     */
    #[Computed]
    public function acceptedWithdrawAmounts(): array
    {
        return ['50', '100', '500', '1000', '2000', 'All-in'];
    }

    /**
     * Specify a selection based on the accepted withdrawal amounts.
     */
    public function selectWithdrawAmount(string $amount): void
    {
        if (in_array($amount, $this->acceptedWithdrawAmounts)) {
            $this->selected_withdraw_amount = $amount;
        }
    }

    /**
     * Handle payment and withdraw process request.
     */
    public function withdraw(): void
    {
        if (!in_array($this->selected_withdraw_amount, $this->acceptedWithdrawAmounts))
            return;

        $amount = $this->selected_withdraw_amount === 'All-in'
            ? $this->wallet->balance
            : $this->selected_withdraw_amount;

        auth()->user()->wallet->transactions()->create(
            [
                'amount' => $amount,
                'transaction_type' => TransactionType::Withdraw,
                'status' => TransactionStatus::Success,
            ]
        );

        $this->balance -= (int)$amount;
        $this->reset('selected_withdraw_amount');
    }
    #endregion
    #endregion

    #region Computed Properties - Wallet, Transactions, Latest Transaction
    /**
     * Get the user's wallet.
     */
    #[Computed]
    public function wallet(): Wallet
    {
        return auth()->user()->wallet;
    }

    /**
     * Get the user's transactions.
     */
    #[Computed]
    public function transactions(): Collection
    {
        return auth()->user()->wallet->transactions()->orderByDesc('created_at')->get();
    }

    /**
     * Get the latest transaction.
     */
    #[Computed]
    public function lastTransaction(): string
    {
        return $this->transactions->first()?->created_at ?? 'Never';
    }
    #endregion

    #region Computed Properties - Stats of total: charge, withdraw, win, loss
    /**
     * Get the total charge amount.
     */
    #[Computed]
    public function totalCharge(): string
    {
        return $this->total(TransactionType::Charge);
    }

    /**
     * Get the total withdraw amount.
     */
    #[Computed]
    public function totalWithdraw(): string
    {
        return $this->total(TransactionType::Withdraw);
    }

    /**
     * Get the total win amount.
     */
    #[Computed]
    public function totalWin(): string
    {
        return $this->total(TransactionType::Win);
    }

    /**
     * Get the total loss amount.
     */
    #[Computed]
    public function totalLoss(): string
    {
        return $this->total(TransactionType::Loss);
    }

    /**
     * Calculate total amount (coins) based on given transaction type.
     */
    public function total(TransactionType $type)
    {
        return $this->transactions
            ->where('transaction_type', $type)
            ->where('status', TransactionStatus::Success)
            ->sum('amount');
    }
    #endregion
}
