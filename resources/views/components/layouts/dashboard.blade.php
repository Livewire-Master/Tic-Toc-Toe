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

@stack('after::header')

<section class="grow bg-gradient-to-br from-secondary-950 to-secondary-900 grid grid-cols-9 py-8 gap-16 px-8">
    <x-dashboard.aside/>

    <main class="col-span-7">
        {{ $slot }}
    </main>
</section>

<x-dashboard.footer/>

@vite('resources/js/app.js')
</body>
</html>
