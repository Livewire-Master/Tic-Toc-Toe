<div class="flex flex-col gap-8">
    <div class="flex flex-col gap-2 max-w-fit">
        <h2 class="font-medium plaza-sans">Opponent</h2>
        <div class="grid grid-cols-2 rounded-lg overflow-hidden gap-0.5">
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-primary-600 animate">
                Person
            </button>
            <button class="px-8 py-2 text-center bg-secondary-900 hover:bg-primary-600 animate">
                Computer
            </button>
        </div>
    </div>

    <div class="flex flex-col gap-2 max-w-fit">
        <h2 class="font-medium plaza-sans">Game Type</h2>
        <div class="grid grid-cols-2 rounded-lg overflow-hidden gap-0.5">
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-success-600 animate">
                Freemium
            </button>
            <button class="px-8 py-2 text-center bg-secondary-900 hover:bg-primary-600 animate">
                Gamble
            </button>
        </div>
    </div>

    <x-dashboard.game.config.tab
        title="Join Fee (Bet)"
        hint="Your Balance: {{ auth()->user()->wallet->balance }} coins"
        method="selectJoinFee"
        :selector="$selected_join_fee"
        key_prefix="join-fee-option"
        :options="$this->joinFeeOptions"
    />

    <div class="flex flex-col gap-2 max-w-fit">
        <div class="flex items-center justify-between">
            <h2 class="font-medium plaza-sans">Game Speed</h2>
            <p class="text-sm">Format: "Move:Bank" in seconds</p>
        </div>
        <div class="grid grid-cols-4 rounded-lg overflow-hidden gap-0.5">
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-danger-500 animate">
                Speedy (30:300)
            </button>
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-success-600 animate">
                Balanced (40:400)
            </button>
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-primary-600 animate">
                Relaxed: (60:600)
            </button>
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-warning-500 animate">
                Freeze: (90, 900)
            </button>
        </div>
    </div>

    <div class="flex flex-col gap-2 max-w-fit">
        <div class="flex items-center justify-between">
            <h2 class="font-medium plaza-sans">Game Rounds</h2>
        </div>
        <div class="grid grid-cols-5 rounded-lg overflow-hidden gap-0.5">
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-primary-600 animate">
                Single <span class="">(1)</span>
            </button>
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-success-600 animate">
                Twin <span class="plaza-sans">(2)</span>
            </button>
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-warning-600 animate">
                Triple <span class="plaza-sans">(3)</span>
            </button>
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-accent-500 animate">
                Quad  <span class="plaza-sans">(4)</span>
            </button>
            <button class="px-8 py-2 bg-secondary-900 text-center hover:bg-danger-500 animate">
                Quint  <span class="plaza-sans">(5)</span>
            </button>
        </div>
    </div>
</div>
