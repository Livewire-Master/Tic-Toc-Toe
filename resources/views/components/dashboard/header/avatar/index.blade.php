<a href="{{ route('page.dashboard.profile') }}" wire:navigate class="flex items-center gap-2">
    <div class="rounded-full w-10 h-10 bg-secondary-800 overflow-hidden">
        <img
            src="{{ auth()->user()->avatar }}"
            alt=""
            class="w-full h-full object-center object-cover"
        >
    </div>
    <p>
        {{ auth()->user()->display_name }}
    </p>
</a>
