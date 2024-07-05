<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ isset($title) ? "Tic Toc Toe - $title" : 'Tic Toc Toe' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-svh text-white flex flex-col">

<x-dashboard.header/>

<section class="grow bg-gradient-to-br from-secondary-950 to-secondary-900 grid grid-cols-9 py-8 gap-16 px-8">
    <aside class="col-span-2 flex flex-col gap-4 text-secondary-400">
        <a href=""
           class="flex items-center gap-2 rounded-lg px-4 py-2 bg-white/5 text-primary-400"
        >
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 7.75H16.255M12 12H12.005M7.75 16.25H7.755M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21ZM16.5 7.75C16.5 7.88807 16.3881 8 16.25 8C16.1119 8 16 7.88807 16 7.75C16 7.61193 16.1119 7.5 16.25 7.5C16.3881 7.5 16.5 7.61193 16.5 7.75ZM12.25 12C12.25 12.1381 12.1381 12.25 12 12.25C11.8619 12.25 11.75 12.1381 11.75 12C11.75 11.8619 11.8619 11.75 12 11.75C12.1381 11.75 12.25 11.8619 12.25 12ZM8 16.25C8 16.3881 7.88807 16.5 7.75 16.5C7.61193 16.5 7.5 16.3881 7.5 16.25C7.5 16.1119 7.61193 16 7.75 16C7.88807 16 8 16.1119 8 16.25Z"
                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <span>Games</span>
        </a>

        <a
            href=""
            class="px-4 py-2 flex items-center gap-2 hover:bg-white/5 rounded-lg animate"
        >
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.5 14.6667C8.5 15.9553 9.54467 17 10.8333 17H13C14.3807 17 15.5 15.8807 15.5 14.5C15.5 13.1193 14.3807 12 13 12H11C9.61929 12 8.5 10.8807 8.5 9.5C8.5 8.11929 9.61929 7 11 7H13.1667C14.4553 7 15.5 8.04467 15.5 9.33333M12 5.5V7M12 17V18.5M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <span>
                Transactions
            </span>
        </a>

        <a
            href=""
            class="px-4 py-2 flex items-center gap-2 hover:bg-white/5 rounded-lg animate"
        >
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <span>
                Profile
            </span>
        </a>

        <a
            href=""
            class="px-4 py-2 flex items-center gap-2 hover:bg-white/5 rounded-lg animate"
        >
            <svg class="w-6 h-6 rotate-180" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 16.9999L21 11.9999M21 11.9999L16 6.99994M21 11.9999H9M12 16.9999C12 17.2955 12 17.4433 11.989 17.5713C11.8748 18.9019 10.8949 19.9968 9.58503 20.2572C9.45903 20.2823 9.31202 20.2986 9.01835 20.3312L7.99694 20.4447C6.46248 20.6152 5.69521 20.7005 5.08566 20.5054C4.27293 20.2453 3.60942 19.6515 3.26118 18.8724C3 18.2881 3 17.5162 3 15.9722V8.02764C3 6.4837 3 5.71174 3.26118 5.12746C3.60942 4.34842 4.27293 3.75454 5.08566 3.49447C5.69521 3.29941 6.46246 3.38466 7.99694 3.55516L9.01835 3.66865C9.31212 3.70129 9.45901 3.71761 9.58503 3.74267C10.8949 4.0031 11.8748 5.09798 11.989 6.42855C12 6.55657 12 6.70436 12 6.99994"
                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <span>
                Logout
            </span>
        </a>
    </aside>

    <main class="col-span-7">
        {{ $slot }}
    </main>
</section>

<footer
    class="px-8 py-4 bg-secondary-900 border-t border-secondary-800
        flex items-center justify-between text-secondary-400"
>
    <p>
        Crafted with <span class="text-danger-500">❤️</span> by <a href="" class="underline">Armin</a>
    </p>

    <nav class="flex items-center gap-6">
        <a
            href=""
            class="hover:text-white animate"
        >
            &bullet;
            Contact
        </a>

        <a
            href=""
            class="hover:text-white animate"
        >
            &bullet;
            About
        </a>

        <a
            href=""
            class="hover:text-white animate"
        >
            &bullet;
            Rules
        </a>

        <a
            href=""
            class="hover:text-white animate"
        >
            &bullet;
            Privacy
        </a>

        <a
            href=""
            class="hover:text-white animate"
        >
            &bullet;
            Policy
        </a>
    </nav>

    <p class="flex gap-2 w-48 justify-end">
        <span>Ping Latency:</span>
        <span id="latency">×××</span>
        <span>ms</span>
    </p>
</footer>

@vite('resources/js/app.js')
</body>
</html>
