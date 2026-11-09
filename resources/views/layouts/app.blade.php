<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/icons/ect_icon.png') }}" />
    <title>EcomTech - @yield('title')</title>
    @vite(['resources/css/app.css'])
    @yield('styles')
</head>

<body>
    <header>
        @include('nav')
    </header>
    <main>
        @yield('content')
    </main>
    @include('footer')
</body>

</html>
