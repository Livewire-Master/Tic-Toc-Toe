<div class="grid grid-cols-4 gap-8">
    <x-dashboard.stat.card.simple
        title="Total Charge"
        :amount="$this->totalCharge"
        suffix="coins"
    />

    <x-dashboard.stat.card.simple
        title="Total Withdraw"
        :amount="$this->totalWithdraw"
        suffix="coins"
    />

    <x-dashboard.stat.card.simple
        title="Total Win"
        :amount="$this->totalWin"
        suffix="coins"
    />

    <x-dashboard.stat.card.simple
        title="Total Loss"
        :amount="$this->totalLoss"
        suffix="coins"
    />

    <x-dashboard.stat.card.simple
        class="col-span-2"
        title="Current Balance"
        :amount="$balance"
        suffix="coins"
    />

    <x-dashboard.stat.card.simple
        wire:key="latest-balance"
        class="col-span-2"
        title="Last Transaction"
        :amount="$this->lastTransaction"
    />
</div>
