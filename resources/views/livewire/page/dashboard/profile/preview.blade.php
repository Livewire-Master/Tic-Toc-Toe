<div class="flex flex-col gap-4 w-full max-w-xs">
    <h2>
        You look like this
    </h2>
    <div class="flex flex-col gap-6">
        <div class="w-full h-px bg-white/10"></div>
        <div class="flex flex-col gap-2">
            <div class="flex gap-4">
                <div>
                    <div class="rounded-full p-0.5 ring-2 ring-success-300">
                        <div class="rounded-full w-12 h-12 overflow-hidden">
                            <img
                                src="{{ auth()->user()->avatar }}"
                                alt="{{ auth()->user()->display_name }}'s profile image"
                                class="w-full h-full object-center object-cover"
                            >
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <p>{{ auth()->user()->display_name }}</p>
                    <p class="flex gap-2 items-center">
                        {{ auth()->user()->created_at->ago() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
