@extends('web.layout.master')

@section('title')
    Кондиционеры в Симферополе | Продажа, установка, ремонт | Климат и Точка Крым
@endsection

@push('stylesheets')
    @vite(['public/css/app/sections/welcome/cards.css', 'public/css/app/sections/welcome/carousel.css', 'public/css/app/sections/welcome/features.css'])
@endpush

@section('content')
    @include('web.sections.welcome.carousel', [
        'model' => $model,
        'service' => $service,
    ])
    @include('web.sections.welcome.cards')
    @include('web.sections.welcome.features')
@endsection
