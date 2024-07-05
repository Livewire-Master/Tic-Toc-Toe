<div
    class="w-full min-h-svh flex flex-col items-center justify-center gap-8 bg-gradient-to-br from-secondary-950 to-secondary-900">
    <header class="flex flex-col items-center justify-center gap-1 relative">
        <h1 class="font-bold plaza-sans text-white text-3xl z-10">
            Tic. Toc. Toe.
        </h1>
        <div class="absolute -top-5">
            <div class="flex items-center justify-center relative">
                <p class="font-black whitespace-nowrap text-4xl opacity-20 text-white/40">
                    Modern Edition
                </p>
            </div>
        </div>
        <p class="text-secondary-400">
            Enter your credentials to log-in
        </p>
    </header>

    <main class="w-full max-w-xs">
        <form class="w-full flex flex-col gap-4">
            <div class="flex flex-col gap-1" x-data="{focused: false, content: ''}">
                <label class="relative flex items-center">
                    <input @focus="focused = true" @blur="focused = false" x-model="content" inputmode="email"
                           type="text"
                           class="w-full pl-10 pr-4 py-2 rounded-lg
                                    border-2 outline-none animate
                                    text-white bg-secondary-800
                                    border-secondary-700 focus:border-primary-600
                                    placeholder:text-secondary-600" placeholder="Enter your email address">

                    <svg class="w-6 h-6 absolute left-3 animate text-secondary-500"
                         viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z"
                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="currentColor"
                              stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                </label>
            </div>

            <div class="flex flex-col gap-1" x-data="{focused: false, content: ''}">
                <label class="relative flex items-center">
                    <input @focus="focused = true" @blur="focused = false" x-model="content" type="password"
                           class="w-full pl-10 pr-4 py-2 rounded-lg
                                    border-2 outline-none animate
                                    text-white bg-secondary-800
                                    border-secondary-700 focus:border-primary-600
                                    placeholder:text-secondary-600" placeholder="Enter your password">

                    <svg class="w-6 h-6 absolute left-3 animate text-secondary-500"
                         viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22 11V8.2C22 7.0799 22 6.51984 21.782 6.09202C21.5903 5.71569 21.2843 5.40973 20.908 5.21799C20.4802 5 19.9201 5 18.8 5H5.2C4.0799 5 3.51984 5 3.09202 5.21799C2.71569 5.40973 2.40973 5.71569 2.21799 6.09202C2 6.51984 2 7.0799 2 8.2V11.8C2 12.9201 2 13.4802 2.21799 13.908C2.40973 14.2843 2.71569 14.5903 3.09202 14.782C3.51984 15 4.0799 15 5.2 15H11M12 10H12.005M17 10H17.005M7 10H7.005M19.25 17V15.25C19.25 14.2835 18.4665 13.5 17.5 13.5C16.5335 13.5 15.75 14.2835 15.75 15.25V17M12.25 10C12.25 10.1381 12.1381 10.25 12 10.25C11.8619 10.25 11.75 10.1381 11.75 10C11.75 9.86193 11.8619 9.75 12 9.75C12.1381 9.75 12.25 9.86193 12.25 10ZM17.25 10C17.25 10.1381 17.1381 10.25 17 10.25C16.8619 10.25 16.75 10.1381 16.75 10C16.75 9.86193 16.8619 9.75 17 9.75C17.1381 9.75 17.25 9.86193 17.25 10ZM7.25 10C7.25 10.1381 7.13807 10.25 7 10.25C6.86193 10.25 6.75 10.1381 6.75 10C6.75 9.86193 6.86193 9.75 7 9.75C7.13807 9.75 7.25 9.86193 7.25 10ZM15.6 21H19.4C19.9601 21 20.2401 21 20.454 20.891C20.6422 20.7951 20.7951 20.6422 20.891 20.454C21 20.2401 21 19.9601 21 19.4V18.6C21 18.0399 21 17.7599 20.891 17.546C20.7951 17.3578 20.6422 17.2049 20.454 17.109C20.2401 17 19.9601 17 19.4 17H15.6C15.0399 17 14.7599 17 14.546 17.109C14.3578 17.2049 14.2049 17.3578 14.109 17.546C14 17.7599 14 18.0399 14 18.6V19.4C14 19.9601 14 20.2401 14.109 20.454C14.2049 20.6422 14.3578 20.7951 14.546 20.891C14.7599 21 15.0399 21 15.6 21Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </label>
            </div>

            <button
                class="uppercase animate bg-secondary-900 border hover:bg-secondary-800 border-secondary-800 rounded-lg px-4 py-2 text-white">
                Login
            </button>

            <p class="text-secondary-400 text-sm">
                Does not have an account?
                <a href="{{ route('page.signup') }}" wire:navigate class="text-white underline">
                    Create
                </a>
            </p>
        </form>
    </main>

    <footer>
        <p class="text-xs text-secondary-400">
            By playing this game you agreed to our
            <a href="" class="text-white underline">terms of use</a>
            and
            <a href="" class="text-white underline">policies</a>
        </p>
    </footer>
</div>
