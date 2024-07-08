@props([
    'type',
    'amount',
    'date',
    'colors' => [
        \App\Enums\TransactionType\TransactionType::Charge->value => 'text-primary-400',
        \App\Enums\TransactionType\TransactionType::Withdraw->value => 'text-warning-300',
        \App\Enums\TransactionType\TransactionType::Win->value => 'text-success-400',
        \App\Enums\TransactionType\TransactionType::Loss->value => 'text-danger-400',
    ],
    'icon_classes' => [
        \App\Enums\TransactionType\TransactionType::Charge->value => 'rotate-180',
        \App\Enums\TransactionType\TransactionType::Withdraw->value => '',
        \App\Enums\TransactionType\TransactionType::Win->value => 'rotate-90',
        \App\Enums\TransactionType\TransactionType::Loss->value => '',
    ],
])

<li class="flex items-center justify-between">
    <div class="flex items-center gap-1 {{ $colors[$type->value] }}">
        <x-dynamic-component
            component="icon.{{ $type->value }}"
            class="w-6 h-6 {{ $icon_classes[$type->value] }}"
        />

        <p>
            {{ $type->value }}
        </p>
    </div>
    <p>{{ number_format($amount) }} Coins</p>
</li>
