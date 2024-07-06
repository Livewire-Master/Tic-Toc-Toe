@props([
    'label',
    'size' => '2xl',
    'sizes' => [
        'normal' => '',
        '2xl' => 'text-2xl',
    ],
])
<h4 {{ $attributes->merge(['class' => 'plaza-sans ' . $sizes[$size]]) }}>{{ $label }}</h4>
