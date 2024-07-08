@props([
    'title',
    'hint' => null,
    'options',
    'method',
    'selector',
    'key_prefix',
])

<div class="flex flex-col gap-2 max-w-fit">
    <div class="flex items-center justify-between">
        <h2 class="font-medium plaza-sans">{{ $title }}</h2>
        @if($hint)
            <p class="text-sm">{{ $hint }}</p>
        @endif
    </div>

    <div class="grid grid-cols-5 rounded-lg overflow-hidden gap-0.5">
        @foreach($options as $option)
            <x-dashboard.game.config.tab.button
                wire:key="{{ $key_prefix }}-{{ $loop->index }}"
                :key="$option['key']"
                :label="$option['label']"
                :color="$option['color']"
                :method="$method"
                :selector="$selector"
            />
        @endforeach
    </div>
</div>
