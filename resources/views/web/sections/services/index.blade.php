@extends('web.layout.master')

@section('title')
    Кондиционеры в Симферополе: установка, чистка, обслуживание - Климат и Точка Крым
@endsection

@section('meta')
    @include('web.layout.partials.meta', [
        'description' => 'Климат и точка Крым. Профессиональная установка и чистка кондиционеров в Симферополе. Гарантия на работы, доступные цены. Выезд мастера в день
                                        обращения.',
        'ogTitle' => 'Кондиционеры в Симферополе: установка, чистка, обслуживание - Климат и Точка Крым',
        'ogDescription' => 'Оказываем полный спектр услуг по установке, чистке и обслуживанию кондиционеров в Симферополе. Доступные цены, гарантия
                                качества, индивидуальный подход.',
        'ogUrl' => env('APP_URL') . '/services',
    ])
@endsection

@section('content')
    @include('web.sections.services.body', [
        'services' => $services,
        'additionalServices' => $additionalServices,
    ])
@endsection
