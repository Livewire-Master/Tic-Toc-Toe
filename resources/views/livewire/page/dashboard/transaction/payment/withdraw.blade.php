<div class="">
    <div class="flex flex-col gap-2">
        <div class="flex items-center justify-between">
            <x-dashboard.page.subtitle size="normal" label="Withdraw Amount (coins)"/>
        </div>
        <div class="grid grid-cols-3 rounded-lg overflow-hidden gap-0.5">
            @foreach($this->acceptedWithdrawAmounts as $amount)
                <x-dashboard.transaction.payment.tab
                    wire:key="withdraw-amount-selector-{{ $loop->index }}"
                    :label="$amount"
                    :key="strtolower($amount)"
                    method="selectWithdrawAmount"
                    :selector="$selected_withdraw_amount"
                    color="danger"
                />
            @endforeach
        </div>
        <div></div>
        <x-form.button
            label="Withdraw"
            type="danger"
        />
    </div>
</div>
