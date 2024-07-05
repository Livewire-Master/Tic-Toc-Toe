<div class="col-span-7 flex flex-col gap-8">
    <div class="flex items-center justify-between">
        <div class="relative max-w-fit">
            <h1 class="font-bold plaza-sans text-3xl">
                Transactions
            </h1>
        </div>
    </div>
    <div class="flex items-start justify-between gap-32">
        <div class="flex flex-col gap-8 grow">
            <div class="grid grid-cols-4 gap-8">
                <x-dashboard.stat.card.simple
                    title="Total Charge"
                    amount="0"
                    suffix="coins"
                />

                <x-dashboard.stat.card.simple
                    title="Total Withdraw"
                    amount="0"
                    suffix="coins"
                />

                <x-dashboard.stat.card.simple
                    title="Total Win"
                    amount="0"
                    suffix="coins"
                />

                <x-dashboard.stat.card.simple
                    title="Total Loss"
                    amount="0"
                    suffix="coins"
                />

                <x-dashboard.stat.card.simple
                    class="col-span-2"
                    title="Current Balance"
                    amount="0"
                    suffix="coins"
                />

                <x-dashboard.stat.card.simple
                    class="col-span-2"
                    title="Last Transaction"
                    amount="2 Days ago"
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

        <div class="w-full max-w-xs flex flex-col gap-8">
            <div class="grid grid-cols-2 rounded-lg overflow-hidden gap-0.5">
                <button class="px-8 py-2 text-center bg-secondary-900 animate">
                    Charge
                </button>
                <button class="px-8 py-2 bg-danger-500 text-center hover:bg-primary-600 animate">
                    Withdraw
                </button>
            </div>

            <div class="hidden">
                <div class="flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <h2 class="font-medium plaza-sans">Charge Amount (coins)</h2>
                    </div>
                    <div class="grid grid-cols-3 rounded-lg overflow-hidden gap-0.5">
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-primary-600 animate">
                            50
                        </button>
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-primary-600 animate">
                            100
                        </button>
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-primary-600 animate">
                            500
                        </button>
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-primary-600 animate">
                            1000
                        </button>
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-primary-600 animate">
                            2000
                        </button>
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-primary-600 animate">
                            4000
                        </button>
                    </div>
                    <div></div>
                    <button class="px-4 py-2 rounded-lg bg-primary-600 flex items-center justify-center hover:bg-primary-500 animate">
                        Pay
                    </button>
                </div>
            </div>

            <div class="">
                <div class="flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <h2 class="font-medium plaza-sans">Withdraw Amount (coins)</h2>
                    </div>
                    <div class="grid grid-cols-3 rounded-lg overflow-hidden gap-0.5">
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-danger-500 animate">
                            50
                        </button>
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-danger-500 animate">
                            100
                        </button>
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-danger-500 animate">
                            500
                        </button>
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-danger-500 animate">
                            1000
                        </button>
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-danger-500 animate">
                            2000
                        </button>
                        <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-danger-500 animate">
                            All-in
                        </button>
                    </div>
                    <div></div>
                    <button class="px-4 py-2 rounded-lg bg-danger-500 flex items-center justify-center hover:bg-danger-600 animate">
                        Withdraw
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
