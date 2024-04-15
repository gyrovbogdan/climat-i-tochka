@extends('web.layout.master')

@section('title')
    Вентиляция в Симферополе | Магазин и монтаж систем вентиляции | Климат и Точка Крым
@endsection

@section('meta')
    @include('web.layout.partials.meta', [
        'description' =>
            'Климат и точка Kрым. Вентиляция в Симферополе: Большой выбор систем вентиляции. Монтаж и доставка. Купить вентиляцию в Симферополе по выгодным ценам.',
        'ogTitle' => 'Вентиляция в Симферополе | Магазин и монтаж систем вентиляции | Климат и Точка Крым',
        'ogDescription' => 'Вентиляция в Симферополе: широкий выбор систем вентиляции, труб, приточной вентиляции. Купить вентиляцию по низким
                            ценам в магазине "Климат и Точка". Монтаж вентиляции в Крыму.',
        'ogUrl' => env('APP_URL') . '/ventilation',
    ])
@endsection

@push('stylesheets')
    @vite('public/css/app/sections/ventilation/app.css')
@endpush


@section('content')
    @include('web.sections.ventilation.body', ['phone' => $phone])
@endsection
