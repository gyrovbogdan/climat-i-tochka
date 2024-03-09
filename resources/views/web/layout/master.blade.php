<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Климат и точка Крым')
    </title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'public/css/app/app.css'])
    @stack('stylesheets')
</head>

<body>
    <header>
        @include('web.layout.partials.nav')
    </header>

    <main>
        @yield('content')
    </main>

    @include('web.layout.partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

</html>
