<!DOCTYPE html>
<html lang="ru">

<head>
    @yield('meta')
    <title>
        @yield('title', 'Кондиционеры в Симферополе | Продажа, установка, ремонт | Купить кондиционер | Установить кондиционер | Недорогие кондиционеры | Климат и Точка Крым')
    </title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
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
