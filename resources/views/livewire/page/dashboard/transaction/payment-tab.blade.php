<div class="w-full max-w-xs flex flex-col gap-8">
    @include('livewire.page.dashboard.transaction.payment.tab-switcher')

    @include("livewire.page.dashboard.transaction.payment.$current_payment_tab")
</div>
