<div class="col-span-7 flex flex-col gap-8">
    <div class="flex items-center justify-between">
        <x-dashboard.page.title label="Transactions"/>
    </div>
    <div class="flex items-start justify-between gap-32">
        <div class="flex flex-col gap-8 grow">
            @include('livewire.page.dashboard.transaction.stat.total-cards')

            @include('livewire.page.dashboard.transaction.history')
        </div>

        @include('livewire.page.dashboard.transaction.payment-tab')
    </div>
</div>
