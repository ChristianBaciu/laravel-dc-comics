<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite('resources/js/app.js')
</head>
<body>
    {{-- header --}}
    @include('partials.header')
    {{-- main --}}
    @include('partials.main')
    {{-- footer --}}
    @include('partials.footer')
</body>
</html>