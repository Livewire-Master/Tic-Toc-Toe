@props([
    'label',
    'key',
    'identifier',
    'method',
    'selector',
    'color' => 'primary',
    'colors' => [
        'primary' => 'bg-primary-500',
        'danger' => 'bg-danger-500',
        'warning' => 'bg-warning-500',
        'accent' => 'bg-accent-500',
        'success' => 'bg-success-600',
        'info' => 'bg-info-500',
    ],
])
<button
    wire:click.prevent="{{ $method }}('{{ $identifier }}','{{ $key }}')"
    class="px-8 py-2 text-center animate
    {{ ($selector[$identifier] ?? null) === $key ? $colors[$color] : 'bg-secondary-900 hover:bg-secondary-800' }}"
>
    {{ $label }}
</button>
