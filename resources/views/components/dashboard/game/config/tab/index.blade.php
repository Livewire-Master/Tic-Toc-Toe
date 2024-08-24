@props([
    'title',
    'hint' => null,
    'options',
    'identifier',
    'method',
    'selector',
    'key_prefix',
    'cols' => null,
    'columns' => [
        '1' => 'grid-cols-1',
        '2' => 'grid-cols-2',
        '3' => 'grid-cols-3',
        '4' => 'grid-cols-4',
        '5' => 'grid-cols-5',
        '6' => 'grid-cols-6',
        '7' => 'grid-cols-7',
        '8' => 'grid-cols-8',
        '9' => 'grid-cols-9',
        '10' => 'grid-cols-10',
        '11' => 'grid-cols-11',
        '12' => 'grid-cols-12',
    ],
])

<div class="flex flex-col gap-2 max-w-fit">
    <div class="flex items-center justify-between">
        <h2 class="font-medium plaza-sans">{{ $title }}</h2>
        @if($hint)
            <p class="text-sm">{{ $hint }}</p>
        @endif
    </div>

    <div class="grid {{ $cols ? $columns[$cols] : ($columns[count($options)]) }} rounded-lg overflow-hidden gap-0.5">
        @foreach($options as $option)
            <x-dashboard.game.config.tab.button
                wire:key="{{ $key_prefix }}-{{ $loop->index }}"
                :key="$option['key']"
                :label="$option['label']"
                :color="$option['color']"
                :identifier="$identifier"
                :method="$method"
                :selector="$selector"
            />
        @endforeach
    </div>

    @error($identifier)
    <p class="text-danger-500 text-sm">
        {{ $message }}
    </p>
    @enderror
</div>
