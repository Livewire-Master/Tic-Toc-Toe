@props(
    [
        'label',
        'icon' => null,
        'position' => 'before',
        'type' => 'default',
        'classes' => [
            'default' => 'bg-secondary-900 border hover:bg-secondary-800 border-secondary-800',
            'primary' => 'bg-primary-600 hover:bg-primary-500',
            'danger' => 'bg-danger-500 hover:bg-danger-600',
            'warning' => 'bg-warning-500 hover:bg-warning-600',
        ]
    ]
)

@php
    $icon_classes = $attributes['icon-classes'] ?? 'w-6 h-6';
@endphp


<button
    {{ $attributes }}
    class="uppercase animate rounded-lg px-4 py-2 plaza-sans text-white flex items-center justify-center gap-2 {{ $classes[$type] }}"
>
    @if(isset($icon) && $position === 'before')
        <x-dynamic-component component="icon.{{ $icon }}" class="{{ $icon_classes }}"/>
    @endif

    <span class="plaza-sans-text">{{ $label }}</span>

    @if(isset($icon) && $position === 'after')
        <x-dynamic-component component="icon.{{ $icon }}" class="{{ $icon_classes }}"/>
    @endif

</button>
