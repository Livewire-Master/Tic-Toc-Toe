<div class="col-span-7 flex flex-col gap-8">
    <div class="flex items-center justify-between">
        <div class="relative max-w-fit">
            <h1 class="font-bold plaza-sans text-3xl">
                Profile
            </h1>
        </div>
    </div>
    <div class="flex items-start justify-between gap-32">
        <div class="flex gap-16 w-full">
            <div class="flex flex-col gap-4 w-full max-w-xs">
                <h4 class="plaza-sans text-2xl">Profile Info</h4>

                <div class="flex items-center justify-center">
                    <input id="input-avatar" type="file" alt="profile image" class="hidden">
                    <div class="rounded-full w-24 h-24 bg-secondary-800 overflow-hidden relative">
                        <label for="input-avatar"
                               class="absolute inset-0 bg-secondary-900 bg-opacity-60 cursor-pointer flex items-center justify-center">
                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 11.5V14.6C22 16.8402 22 17.9603 21.564 18.816C21.1805 19.5686 20.5686 20.1805 19.816 20.564C18.9603 21 17.8402 21 15.6 21H8.4C6.15979 21 5.03969 21 4.18404 20.564C3.43139 20.1805 2.81947 19.5686 2.43597 18.816C2 17.9603 2 16.8402 2 14.6V9.4C2 7.15979 2 6.03969 2.43597 5.18404C2.81947 4.43139 3.43139 3.81947 4.18404 3.43597C5.03969 3 6.15979 3 8.4 3H12.5M19 8V2M16 5H22M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12Z"
                                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </label>
                        <img
                            src="{{ auth()->user()->avatar }}"
                            alt="{{ auth()->user()->display_name }}'s profile image"
                            class="w-full h-full object-center object-cover"
                        >
                    </div>
                </div>

                <div class="flex flex-col gap-2 max-w-full">
                    <h2 class="font-medium plaza-sans">Display Name</h2>
                    <x-form.input
                        icon="hashtag"
                        placeholder="Enter your display name"
                        icon-classes="w-5 h-5"
                    />
                </div>

                <div class="flex flex-col gap-2 max-w-full">
                    <div class="flex items-center justify-between">
                        <h2 class="font-medium plaza-sans">Username</h2>
                        <p class="text-sm text-secondary-500">
                            For finding by friends
                        </p>
                    </div>
                    <x-form.input
                        icon="user"
                        placeholder="Enter your username"
                        value="{{ auth()->user()->username }}"
                        readonly
                        disabled
                    />
                </div>

                <div class="flex flex-col gap-2 max-w-full">
                    <div class="flex items-center justify-between">
                        <h2 class="font-medium plaza-sans">Email</h2>
                        <p class="text-sm text-secondary-500">
                            Locked for changes
                        </p>
                    </div>
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

                <button class="bg-primary-600 px-4 py-2 rounded-lg flex items-center justify-center plaza-sans uppercase hover:bg-primary-500 animate">
                    Save
                </button>
            </div>

            <div class="flex flex-col gap-4 w-full max-w-xs">
                <h4 class="plaza-sans text-2xl">Password Setting</h4>
                <div class="flex flex-col gap-2 max-w-full">
                    <h2 class="font-medium plaza-sans">Old Password</h2>
                    <x-form.input
                        icon="password"
                        placeholder="Enter your old password"
                    />
                </div>

                <div class="flex flex-col gap-2 max-w-full">
                    <h2 class="font-medium plaza-sans">New Password</h2>
                    <x-form.input
                        icon="password"
                        placeholder="Enter your new password"
                    />
                </div>

                <button class="bg-primary-600 px-4 py-2 rounded-lg flex items-center justify-center plaza-sans uppercase hover:bg-primary-500 animate">
                    Change
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-4 w-full max-w-xs">
            <h2>
                You look like this
            </h2>
            <div class="flex flex-col gap-6">
                <div class="w-full h-px bg-white/10"></div>
                <div class="flex flex-col gap-2">
                    <div class="flex gap-4">
                        <div>
                            <div class="rounded-full p-0.5 ring-2 ring-success-300">
                                <div class="rounded-full w-12 h-12 overflow-hidden">
                                    <img
                                        src="{{ auth()->user()->avatar }}"
                                        alt="{{ auth()->user()->display_name }}'s profile image"
                                        class="w-full h-full object-center object-cover"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p>{{ auth()->user()->display_name }}</p>
                            <p class="flex gap-2 items-center">
                                {{ auth()->user()->created_at->ago() }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
