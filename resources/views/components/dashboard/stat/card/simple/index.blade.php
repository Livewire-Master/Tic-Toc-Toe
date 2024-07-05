@props(['title', 'amount', 'suffix' => null])

<div {{ $attributes->merge(['class' => 'bg-secondary-900 border border-secondary-800 rounded-lg p-4 flex flex-col gap-4']) }}>
    <h3 class="text-lg">
        {{ $title }}
    </h3>
    <p class="text-4xl font-bold plaza-sans">
        {{ $amount }}
        @isset($suffix)
            <span class="text-sm font-medium">{{ $suffix }}</span>
        @endisset
    </p>
</div>
