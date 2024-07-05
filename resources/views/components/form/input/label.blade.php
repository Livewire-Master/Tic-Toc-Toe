@props(['label', 'hint' => null])
<div class="flex items-center justify-between text-white">
    <h2 class="font-medium plaza-sans">{{ $label }}</h2>
    @isset($hint)
        <p class="text-sm text-secondary-500">{{ $hint }}</p>
    @endisset
</div>
