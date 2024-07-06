<div class="">
    <div class="flex flex-col gap-2">
        <div class="flex items-center justify-between">
            <x-dashboard.page.subtitle size="normal" label="Charge Amount (coins)"/>
        </div>
        <div class="grid grid-cols-3 rounded-lg overflow-hidden gap-0.5">
            @foreach($this->acceptedChargeAmounts as $amount)
                <x-dashboard.transaction.payment.tab
                    wire:key="charge-amount-selector-{{ $loop->index }}"
                    :label="$amount"
                    :key="strtolower($amount)"
                    method="selectChargeAmount"
                    :selector="$selected_charge_amount"
                    color="primary"
                />
            @endforeach
        </div>
        <div></div>
        <x-form.button
            wire:click.prevent="charge"
            label="Pay"
            type="primary"
        />
    </div>
</div>
