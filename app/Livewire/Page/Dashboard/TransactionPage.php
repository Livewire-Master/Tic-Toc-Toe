<?php

namespace App\Livewire\Page\Dashboard;

use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;

/**
 * @property array $acceptedChargeAmounts
 * @property array $acceptedWithdrawAmounts
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
}
