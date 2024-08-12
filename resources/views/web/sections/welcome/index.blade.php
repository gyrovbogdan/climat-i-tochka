@extends('web.layout.master')

@section('meta')
    @include('web.layout.partials.meta', [
        'description' =>
            'Климат и точка Kрым. Продажа и установка кондиционеров в Симферополе. Большой выбор кондиционеров по доступным ценам. Бесплатная доставка и установка. Опытные монтажники. Гарантия на все работы.',
        'ogTitle' => 'Кондиционеры в Симферополе | Продажа, установка, ремонт | Климат и Точка Крым',
        'ogDescription' =>
            'Продажа и установка кондиционеров в Симферополе. Большой выбор кондиционеров по доступным ценам. Профессиональная установка и сервисное обслуживание.',
        'ogUrl' => env('APP_URL'),
    ])
@endsection

@push('stylesheets')
    @vite(['public/css/app/sections/welcome/cards.css', 'public/css/app/sections/welcome/carousel.css', 'public/css/app/sections/welcome/features.css'])
@endpush

@section('content')
    @include('web.sections.welcome.carousel', compact('promoConditioner', 'promoService'))
    @include('web.sections.welcome.cards')
    @include('web.sections.welcome.features')
@endsection

@push('scripts')
    @vite(['public/js/sidebar.js'])
@endpush
