<div class="container">
    <div>
        <h1 class="py-4 text-center h4"> Стоимость монтажа:</h1>
        <table class="table table-striped fw-semibold">
            <thead>
                <td class="fs-5">Услуга</td>
                <td class="fs-5">Цена</td>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service['name'] }}</td>
                        <td>{{ is_numeric($service['price']) ? number_format($serivice['price'], 2, ',', ' ') . '₽' : $service['price'] }}
                        </td>
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
        <h2 class="py-4 text-center h4">Дополнительные услуги:</h2>
        <h3 class="mt-4 px-2 h6">Мы предлагаем широкий спектр услуг: от стандартной установки до сложных монтажных
            работ.</h3>

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
                        <td>{{ is_numeric($service['price']) ? number_format($service['price'], 2, ',', ' ') . ' руб.' : $service['price'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
