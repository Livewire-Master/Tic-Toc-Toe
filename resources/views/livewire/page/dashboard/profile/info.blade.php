<div class="flex flex-col gap-4 w-full max-w-xs">
    <x-dashboard.page.subtitle label="Profile Info"/>

    <div class="flex items-center justify-center">
        <input
            wire:model="avatar"
            id="input-avatar"
            type="file"
            alt="profile image"
            class="hidden"
        >
        <div class="rounded-full w-24 h-24 bg-secondary-800 overflow-hidden relative">
            <label for="input-avatar"
                   class="absolute inset-0 bg-secondary-900 bg-opacity-60 cursor-pointer flex items-center justify-center">
                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22 11.5V14.6C22 16.8402 22 17.9603 21.564 18.816C21.1805 19.5686 20.5686 20.1805 19.816 20.564C18.9603 21 17.8402 21 15.6 21H8.4C6.15979 21 5.03969 21 4.18404 20.564C3.43139 20.1805 2.81947 19.5686 2.43597 18.816C2 17.9603 2 16.8402 2 14.6V9.4C2 7.15979 2 6.03969 2.43597 5.18404C2.81947 4.43139 3.43139 3.81947 4.18404 3.43597C5.03969 3 6.15979 3 8.4 3H12.5M19 8V2M16 5H22M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>
            </label>
            <img
                src="{{ $avatar ? $avatar->temporaryUrl() : auth()->user()->avatar }}"
                alt="{{ auth()->user()->display_name }}'s profile image"
                class="w-full h-full object-center object-cover"
            >
        </div>
    </div>
    @error('avatar')
    <div class="px-2">
        <p class="text-danger-400 text-xs">{{ $message }}</p>
    </div>
    @enderror

    <div class="flex flex-col gap-2 max-w-full">
        <x-form.input.label label="Display Name"/>
        <x-form.input
            wire:model="display_name"
            icon="hashtag"
            placeholder="Enter your display name"
            icon-classes="w-5 h-5"
        />
    </div>

    <div class="flex flex-col gap-2 max-w-full">
        <x-form.input.label label="Username" hint="For finding by friends"/>
        <x-form.input
            icon="user"
            placeholder="Enter your username"
            value="{{ auth()->user()->username }}"
            readonly
            disabled
        />
    </div>

    <div class="flex flex-col gap-2 max-w-full">
        <x-form.input.label
            label="Email"
            hint="Locked for changes"
        />
        <x-form.input
            icon="email"
            type="text"
            inputmode="email"
            placeholder="Enter your email address"
            value="{{ auth()->user()->email }}"
            readonly
            disabled
        />
    </div>

    <x-form.button
        wire:click.prevent="updateProfileInfo"
        label="Save"
        type="primary"
    />
</div>
