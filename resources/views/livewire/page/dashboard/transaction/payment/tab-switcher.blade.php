<div class="grid grid-cols-2 rounded-lg overflow-hidden gap-0.5">
    <x-dashboard.transaction.payment.tab
        label="Charge"
        key="charge"
        method="switchPaymentTab"
        :selector="$current_payment_tab"
        color="primary"
    />

    <x-dashboard.transaction.payment.tab
        label="Withdraw"
        key="withdraw"
        method="switchPaymentTab"
        :selector="$current_payment_tab"
        color="warning"
    />
</div>
