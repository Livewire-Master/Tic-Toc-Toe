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
                            src="/src/images/cover.png"
                            alt=""
                            class="w-full h-full object-center object-cover"
                        >
                    </div>
                </div>

                <div class="flex flex-col gap-2 max-w-full">
                    <h2 class="font-medium plaza-sans">Display Name</h2>
                    <div class="flex flex-col gap-1" x-data="{focused: false, content: ''}">
                        <label class="relative flex items-center">
                            <input
                                @focus="focused = true"
                                @blur="focused = false"
                                x-model="content"
                                type="text"
                                class="w-full pl-10 pr-4 py-2 rounded-lg
                                    border-2 outline-none animate
                                    text-white bg-secondary-800
                                    border-secondary-700 focus:border-primary-600
                                    placeholder:text-secondary-600"
                                placeholder="Enter your display name"
                            >

                            <svg class="w-5 h-5 absolute left-3 animate text-secondary-500"
                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.49999 3L6.49999 21M17.5 3L14.5 21M20.5 8H3.5M19.5 16H2.5"
                                      stroke="currentColor"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>

                            </svg>
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-2 max-w-full">
                    <div class="flex items-center justify-between">
                        <h2 class="font-medium plaza-sans">Username</h2>
                        <p class="text-sm text-secondary-500">
                            For finding by friends
                        </p>
                    </div>
                    <div class="flex flex-col gap-1" x-data="{focused: false, content: ''}">
                        <label class="relative flex items-center">
                            <input
                                @focus="focused = true"
                                @blur="focused = false"
                                x-model="content"
                                type="text"
                                class="w-full pl-10 pr-4 py-2 rounded-lg
                                    border-2 outline-none animate
                                    text-white bg-secondary-800
                                    border-secondary-700 focus:border-primary-600
                                    placeholder:text-secondary-600"
                                placeholder="Enter your username"
                            >

                            <svg class="w-6 h-6 absolute left-3 animate text-secondary-500"
                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-2 max-w-full">
                    <div class="flex items-center justify-between">
                        <h2 class="font-medium plaza-sans">Email</h2>
                        <p class="text-sm text-secondary-500">
                            Locked for changes
                        </p>
                    </div>
                    <div class="flex flex-col gap-1" x-data="{focused: false, content: ''}">
                        <label class="relative flex items-center">
                            <input
                                @focus="focused = true"
                                @blur="focused = false"
                                x-model="content"
                                type="text"
                                class="w-full pl-10 pr-4 py-2 rounded-lg
                                    border-2 outline-none animate
                                    text-white bg-secondary-800
                                    border-secondary-700 focus:border-primary-600
                                    placeholder:text-secondary-600"
                                placeholder="Enter your email"
                            >

                            <svg class="w-6 h-6 absolute left-3 animate text-secondary-500"
                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z"
                                      stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="currentColor"
                                      stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                            </svg>
                        </label>
                    </div>
                </div>

                <button class="bg-primary-600 px-4 py-2 rounded-lg flex items-center justify-center plaza-sans uppercase hover:bg-primary-500 animate">
                    Save
                </button>
            </div>

            <div class="flex flex-col gap-4 w-full max-w-xs">
                <h4 class="plaza-sans text-2xl">Password Setting</h4>
                <div class="flex flex-col gap-2 max-w-full">
                    <h2 class="font-medium plaza-sans">Old Password</h2>
                    <div class="flex flex-col gap-1" x-data="{focused: false, content: ''}">
                        <label class="relative flex items-center">
                            <input
                                @focus="focused = true"
                                @blur="focused = false"
                                x-model="content"
                                type="text"
                                class="w-full pl-10 pr-4 py-2 rounded-lg
                                    border-2 outline-none animate
                                    text-white bg-secondary-800
                                    border-secondary-700 focus:border-primary-600
                                    placeholder:text-secondary-600"
                                placeholder="Enter your old password"
                            >

                            <svg class="w-6 h-6 absolute left-3 animate text-secondary-500"
                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 11V8.2C22 7.0799 22 6.51984 21.782 6.09202C21.5903 5.71569 21.2843 5.40973 20.908 5.21799C20.4802 5 19.9201 5 18.8 5H5.2C4.0799 5 3.51984 5 3.09202 5.21799C2.71569 5.40973 2.40973 5.71569 2.21799 6.09202C2 6.51984 2 7.0799 2 8.2V11.8C2 12.9201 2 13.4802 2.21799 13.908C2.40973 14.2843 2.71569 14.5903 3.09202 14.782C3.51984 15 4.0799 15 5.2 15H11M12 10H12.005M17 10H17.005M7 10H7.005M19.25 17V15.25C19.25 14.2835 18.4665 13.5 17.5 13.5C16.5335 13.5 15.75 14.2835 15.75 15.25V17M12.25 10C12.25 10.1381 12.1381 10.25 12 10.25C11.8619 10.25 11.75 10.1381 11.75 10C11.75 9.86193 11.8619 9.75 12 9.75C12.1381 9.75 12.25 9.86193 12.25 10ZM17.25 10C17.25 10.1381 17.1381 10.25 17 10.25C16.8619 10.25 16.75 10.1381 16.75 10C16.75 9.86193 16.8619 9.75 17 9.75C17.1381 9.75 17.25 9.86193 17.25 10ZM7.25 10C7.25 10.1381 7.13807 10.25 7 10.25C6.86193 10.25 6.75 10.1381 6.75 10C6.75 9.86193 6.86193 9.75 7 9.75C7.13807 9.75 7.25 9.86193 7.25 10ZM15.6 21H19.4C19.9601 21 20.2401 21 20.454 20.891C20.6422 20.7951 20.7951 20.6422 20.891 20.454C21 20.2401 21 19.9601 21 19.4V18.6C21 18.0399 21 17.7599 20.891 17.546C20.7951 17.3578 20.6422 17.2049 20.454 17.109C20.2401 17 19.9601 17 19.4 17H15.6C15.0399 17 14.7599 17 14.546 17.109C14.3578 17.2049 14.2049 17.3578 14.109 17.546C14 17.7599 14 18.0399 14 18.6V19.4C14 19.9601 14 20.2401 14.109 20.454C14.2049 20.6422 14.3578 20.7951 14.546 20.891C14.7599 21 15.0399 21 15.6 21Z"
                                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </label>
                    </div>
                </div>

                <div class="flex flex-col gap-2 max-w-full">
                    <h2 class="font-medium plaza-sans">New Password</h2>
                    <div class="flex flex-col gap-1" x-data="{focused: false, content: ''}">
                        <label class="relative flex items-center">
                            <input
                                @focus="focused = true"
                                @blur="focused = false"
                                x-model="content"
                                type="text"
                                class="w-full pl-10 pr-4 py-2 rounded-lg
                                    border-2 outline-none animate
                                    text-white bg-secondary-800
                                    border-secondary-700 focus:border-primary-600
                                    placeholder:text-secondary-600"
                                placeholder="Enter your new password"
                            >

                            <svg class="w-6 h-6 absolute left-3 animate text-secondary-500"
                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 11V8.2C22 7.0799 22 6.51984 21.782 6.09202C21.5903 5.71569 21.2843 5.40973 20.908 5.21799C20.4802 5 19.9201 5 18.8 5H5.2C4.0799 5 3.51984 5 3.09202 5.21799C2.71569 5.40973 2.40973 5.71569 2.21799 6.09202C2 6.51984 2 7.0799 2 8.2V11.8C2 12.9201 2 13.4802 2.21799 13.908C2.40973 14.2843 2.71569 14.5903 3.09202 14.782C3.51984 15 4.0799 15 5.2 15H11M12 10H12.005M17 10H17.005M7 10H7.005M19.25 17V15.25C19.25 14.2835 18.4665 13.5 17.5 13.5C16.5335 13.5 15.75 14.2835 15.75 15.25V17M12.25 10C12.25 10.1381 12.1381 10.25 12 10.25C11.8619 10.25 11.75 10.1381 11.75 10C11.75 9.86193 11.8619 9.75 12 9.75C12.1381 9.75 12.25 9.86193 12.25 10ZM17.25 10C17.25 10.1381 17.1381 10.25 17 10.25C16.8619 10.25 16.75 10.1381 16.75 10C16.75 9.86193 16.8619 9.75 17 9.75C17.1381 9.75 17.25 9.86193 17.25 10ZM7.25 10C7.25 10.1381 7.13807 10.25 7 10.25C6.86193 10.25 6.75 10.1381 6.75 10C6.75 9.86193 6.86193 9.75 7 9.75C7.13807 9.75 7.25 9.86193 7.25 10ZM15.6 21H19.4C19.9601 21 20.2401 21 20.454 20.891C20.6422 20.7951 20.7951 20.6422 20.891 20.454C21 20.2401 21 19.9601 21 19.4V18.6C21 18.0399 21 17.7599 20.891 17.546C20.7951 17.3578 20.6422 17.2049 20.454 17.109C20.2401 17 19.9601 17 19.4 17H15.6C15.0399 17 14.7599 17 14.546 17.109C14.3578 17.2049 14.2049 17.3578 14.109 17.546C14 17.7599 14 18.0399 14 18.6V19.4C14 19.9601 14 20.2401 14.109 20.454C14.2049 20.6422 14.3578 20.7951 14.546 20.891C14.7599 21 15.0399 21 15.6 21Z"
                                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </label>
                    </div>
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
                                        src="/src/images/cover.png"
                                        alt=""
                                        class="w-full h-full object-center object-cover"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p>Jonathan Doe</p>
                            <p class="flex gap-2 items-center">
                                Joined 1 month ago
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
