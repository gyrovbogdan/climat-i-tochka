@extends('web.layout.master')

@section('title')
    Кондиционер {{ $model['conditioner']['brand'] }}
@endsection

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/conditioner-show.css') }}">
@endpush

@section('content')
    <section class="py-5">
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
        <!-- content -->

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
