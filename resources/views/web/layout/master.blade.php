<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Кондиционеры в Симферополе | Продажа, установка, ремонт | Купить кондиционер | Установить кондиционер | Недорогие кондиционеры | Климат и Точка Крым')
    </title>

    <meta property="decription" content="@yield('description', 'Продажа и установка кондиционеров в Симферополе. Большой выбор кондиционеров по доступным ценам. Бесплатная доставка и установка. Опытные монтажники. Гарантия на все работы.')">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og:title', 'Кондиционеры в Симферополе | Продажа, установка, ремонт | Климат и Точка Крым')">
    <meta property="og:description" content="@yield('og:description', 'Продажа и установка кондиционеров в Симферополе. Большой выбор кондиционеров по доступным ценам. Профессиональная установка и сервисное обслуживание.')">
    <meta property="og:url" content="@yield('og:url', 'https://co44321.tw1.ru')">
    <meta property="og:image" content="{{ asset('/resources/images/conditioner.png') }}">
    <meta property="og:site_name" content="Климат и точка Крым">
    <meta property="og:locale" content="ru_RU">

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
