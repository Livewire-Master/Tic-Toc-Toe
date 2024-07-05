@props(['caption'])

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
        {{ $caption }}
    </p>
</header>
