@props(['caption', 'route', 'cta'])
<p class="text-secondary-400 text-sm">
    {{ $caption }}
    <a href="{{ $route }}" wire:navigate class="text-white underline">
        {{ $cta }}
    </a>
</p>
