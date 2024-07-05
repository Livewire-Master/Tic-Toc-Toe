@props(['label'])

<a {{ $attributes }} wire:navigate class="flex items-center justify-center uppercase animate bg-secondary-900 border border-secondary-800 rounded-lg px-4 py-2 text-white">
    {{ $label }}
</a>
