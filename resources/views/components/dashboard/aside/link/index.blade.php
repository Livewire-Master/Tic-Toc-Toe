@props(['label', 'icon' => null])

@php
    $is_active = url()->current() === $attributes['href'];

    $extra_classes = $is_active
    ? 'active bg-white/5 text-primary-400'
    : 'not-active hover:bg-white/5';

    $icon_class = $attributes['icon-class'];
@endphp

<a
    wire:navigate
    {{
         $attributes->merge(
             [
                 'class' => "flex items-center gap-2 rounded-lg px-4 py-2 animate  $extra_classes"
             ]
         )
    }}
>
    @isset($icon)
        <x-dynamic-component
            component="icon.{{ $icon }}"
            class="w-6 h-6 {{ $icon_class }}"
        />
    @endisset

    <span>{{ $label }}</span>
</a>
