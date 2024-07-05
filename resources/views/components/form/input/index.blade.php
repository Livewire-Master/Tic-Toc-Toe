@props(['icon'])

@php
$icon_classes = $attributes['icon-classes'] ?? 'w-6 h-6';
@endphp

<div class="flex flex-col gap-2" x-data="{focused: false}">
    <label class="relative flex items-center">
        <input @focus="focused = true" @blur="focused = false"
               {{ $attributes->merge(['class' => 'w-full pl-10 pr-4 py-2 rounded-lg
                                    border-2 outline-none animate
                                    text-white bg-secondary-800
                                    border-secondary-700 focus:border-primary-600
                                    placeholder:text-secondary-600 disabled:text-secondary-100/50 disabled:cursor-not-allowed']) }}
        >

        <x-dynamic-component
            component="icon.{{ $icon }}"
            class="absolute left-3 animate text-secondary-500 {{ $icon_classes }}"
        />
    </label>

    @isset($attributes['wire:model'])
        <div class="px-2">
            @error($attributes['wire:model'])
            <p class="text-danger-400 text-xs">{{ $message }}</p>
            @enderror
        </div>
    @endisset
</div>
