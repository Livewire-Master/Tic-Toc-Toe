<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ isset($title) ? "Tic Toc Toe - $title" : 'Tic Toc Toe' }}</title>
    @vite('resources/css/app.css')
</head>
<body @stack('body-attr')>
{{ $slot }}

@vite('resources/js/app.js')
</body>
</html>
