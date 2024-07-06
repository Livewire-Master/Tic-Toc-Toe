<div class="col-span-7 flex flex-col gap-8">
    <div class="flex items-center justify-between">
        <x-dashboard.page.title label="Transactions"/>
    </div>
    <div class="flex items-start justify-between gap-32">
        <div class="flex flex-col gap-8 grow">
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
                    title="Current Balance {{ time() }}"
                    :amount="$this->wallet->balance"
                    suffix="coins"
                />

                <x-dashboard.stat.card.simple
                    wire:key="latest-balance"
                    class="col-span-2"
                    title="Last Transaction"
                    :amount="$this->lastTransaction"
                />
            </div>

            <div class="flex flex-col gap-4">
                <h2>
                    Your transactions history
                </h2>
                <div class="flex flex-col gap-6">
                    <div class="w-full h-px bg-white/10"></div>
                    <ul class="flex flex-col gap-4">
                        <li class="flex items-center justify-between text-secondary-500">
                            <p>Reason</p>
                            <p>Amount</p>
                        </li>
                        <li class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-warning-300">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 18L12 13L7 18M17 11L12 6L7 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>
                                    withdraw
                                </p>
                            </div>
                            <p>2,000 Coins</p>
                        </li>
                        <li class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-danger-400">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 6L6 18M6 18H14M6 18V10" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>
                                    loss
                                </p>
                            </div>
                            <p>50 Coins</p>
                        </li>
                        <li class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-success-400">
                                <svg class="w-6 h-6 rotate-90" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 18L6 6M6 6V14M6 6H14" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>
                                    won
                                </p>
                            </div>
                            <p>100 Coins</p>
                        </li>
                        <li class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-primary-400">
                                <svg class="w-6 h-6 rotate-180" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 18L12 13L7 18M17 11L12 6L7 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>
                                    charge
                                </p>
                            </div>
                            <p>4,000 Coins</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @include('livewire.page.dashboard.transaction.payment-tab')
    </div>
</div>
