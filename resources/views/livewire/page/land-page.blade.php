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
            Play classy but modern!
        </p>
    </header>

    <main class="w-full max-w-xs grid grid-cols-2 gap-2">
        <a href="{{ route('page.login') }}" wire:navigate class="flex items-center justify-center uppercase animate bg-secondary-900 border border-secondary-800 rounded-lg px-4 py-2 text-white">
            Login
        </a>
        <a href="{{ route('page.signup') }}" wire:navigate class="flex items-center justify-center uppercase animate bg-secondary-900 border border-secondary-800 rounded-lg px-4 py-2 text-white">
            Sign up
        </a>
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
