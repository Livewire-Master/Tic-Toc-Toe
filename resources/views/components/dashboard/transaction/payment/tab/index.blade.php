@props([
    'label',
    'key',
    'method',
    'selector',
    'color' => 'primary',
    'colors' => [
        'primary' => 'bg-primary-500',
        'danger' => 'bg-danger-500'
    ],
])
<button
    wire:click.prevent="{{ $method }}('{{ $key }}')"
    class="px-8 py-2 text-center animate
    {{ $selector === $key ? $colors[$color] : 'bg-secondary-900 hover:bg-secondary-800' }}"
>
    {{ $label }}
</button>
