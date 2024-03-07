<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Климат и точка Крым')
    </title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v1.0">
    @stack('stylesheets')
</head>

<body>
    <header>
        @stack('header')
        @include('web.layout.partials.nav')
    </header>

    <main>
        @yield('content')
    </main>

    @include('web.layout.partials.footer')
    @section('scripts')
        <script src="{{ asset('js/app.js') }}"></script>
    @show

</html>
