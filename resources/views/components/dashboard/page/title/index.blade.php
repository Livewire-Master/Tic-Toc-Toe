@props(['label', 'promo' => null])

<div class="relative max-w-fit">
    <h1 class="font-bold plaza-sans text-3xl">
        {{ $label }}
    </h1>
    @if(isset($promo))
        <span class="absolute -top-2 -right-7 text-sm">{{ $promo }}</span>
    @endif
</div>
