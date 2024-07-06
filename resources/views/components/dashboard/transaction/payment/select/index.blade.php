@props([
    'method',
    'key',
])

<button
    wire:click.prevent="{{ $method }}('{{ $key }}')"
    class="px-8 py-2 text-center animate
    {{ $selected_charge_amount == 50 ? 'bg-primary-500' : 'bg-secondary-900' }}
"
>
    {{ $label }}
</button>
