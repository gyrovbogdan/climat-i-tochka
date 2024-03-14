<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Климат и точка Крым')
    </title>

    <link rel=”icon” href=”/favicon.ico” type=”image/x-icon”>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'public/css/app/app.css', 'public/css/app/partials/navbar.css'])
    @stack('stylesheets')
</head>

<body>
    <header>
        @include('web.layout.partials.nav', [
            'phone' => $contacts['phone'] ?? '',
            'vk' => $contacts['vk'] ?? '',
            'whatsApp' => $contacts['whatsApp'] ?? '',
            'telegram' => $contacts['telegram'] ?? '',
        ])
    </header>

    <main>
        @yield('content')
    </main>

    @include('web.layout.partials.footer', [
        'phone' => $contacts['phone'] ?? '',
        'vk' => $contacts['vk'] ?? '',
        'whatsApp' => $contacts['whatsApp'] ?? '',
        'telegram' => $contacts['telegram'] ?? '',
    ])
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

</html>
