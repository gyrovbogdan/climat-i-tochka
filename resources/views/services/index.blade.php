@extends('layout.master')

@section('title')
    Услуги
@endsection

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/ventilation.css', false) }}">
@endpush


@section('content')
    <div class="container">
        <div class="">
            <h4 class="py-4 text-center"> Стоимость монтажа:</h4>
            <table class="table table-striped fw-semibold">
                <thead>
                    <td class="fs-5">Услуга</td>
                    <td class="fs-5">Цена</td>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service['name'] }}</td>
                            <td>{{ $service['price'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="fw-semibold">
                В стоимость уже включены кронштейны и крепежный материал.
                Дополнительно оплачивается фактический метраж межблочной трассы.
            </p>
            <p class="fw-semibold">
                Наши монтажники опытные специалисты и имеют все необходимые знания и навыки.
                Мы за индивидуальный подход и мы учтем все ваши пожелания.
            </p>

        </div>

        <div class="pb-5">
            <h4 class="py-4 text-center">Дополнительные услуги:</h4>
            <h6 class="mt-4 px-2">Мы предлагаем широкий спектр услуг: от стандартной установки до сложных монтажных
                работ.</h6>

            <table class="table table-striped fw-semibold">
                <thead>
                    <tr>
                        <td class='fs-5'>Услуга</td>
                        <td class='fs-5'>Цена</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($additionalServices as $service)
                        <tr>
                            <td>{{ $service['name'] }}</td>
                            <td>{{ $service['price'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
