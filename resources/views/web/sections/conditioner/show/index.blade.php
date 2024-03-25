@extends('web.layout.master')

@section('title')
    Купить {{ $model['conditioner']['brand'] }} в Симферополе недорого | Установка кондиционеров | Климат и Точка Крым
@endsection

@section('meta')
    @include('web.layout.partials.meta', [
        'description' =>
            'Установка кондиционеров в Симферополе - широкий выбор сплит-систем по доступным ценам. Профессиональная установка. Официальная гарантия.',
        'ogTitle' => "Купить {$model['conditioner']['brand']} в Симферополе недорого | Установка кондиционеров | Климат и Точка Крым",
        'ogDescription' =>
            'Установка кондиционеров в Симферополе - широкий выбор сплит-систем по доступным ценам.',
        'ogUrl' => env('APP_URL') . '/conditioners',
    ])
@endsection

@push('stylesheets')
    @vite('public/css/app/sections/conditioner/show/app.css')
@endpush

@section('content')
    <section class="py-3">
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-lg-6">
                        @include('web.sections.conditioner.show.carousel', [
                            'images' => $model['conditioner']['images'] ?? ['placeholder.jpg'],
                            'promo_price' => $model['promo_price'],
                            'price' => $model['price'],
                        ])
                    </div>
                    <div class="col-lg-6">
                        @include('web.sections.conditioner.show.describe', ['model' => $model])
                    </div>
                </div>
            </div>
        </div>

        <section class=" border-top py-4 my-4">
            <div class="container">
                <div class="row gx-4">
                    @include('web.sections.conditioner.show.tabs', [
                        'model' => $model,
                        'services' => $services,
                        'additionalServices' => $additionalServices,
                    ])
                    @include('web.sections.conditioner.show.also', [
                        'conditioner' => $fromSeries[0],
                        'models' => $fromSeries[0]['conditionerModel']->where('id', '!=', $model['id']),
                    ])
                </div>
            </div>
        </section>
    </section>
@endsection
