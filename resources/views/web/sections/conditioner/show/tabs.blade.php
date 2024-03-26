<div class="col-lg-8 mb-4">
    <div class="border rounded-2 px-3 py-2 bg-white">
        <!-- Pills navs -->
        <ul class="nav nav-tabs" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                    data-bs-target="#description-tab-pane" type="button" role="tab"
                    aria-controls="description-tab-pane" aria-selected="true">Описание</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="install-tab" data-bs-toggle="tab" data-bs-target="#install-tab-pane"
                    type="button" role="tab" aria-controls="install-tab-pane"
                    aria-selected="false">Установка</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Дополнительные
                    услуги:</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel"
                aria-labelledby="description-tab" tabindex="0">
                <h5 class="mt-3 px-2 text-center">{{ $model['conditioner']['name'] . ' ' . $model['name'] }}</h5>
                <table class="table table-striped fw-semibold">
                    <thead>
                        <td colspan="2" class="px-3 fs-5"> Производительность </td>
                    </thead>
                    <tr>
                        <td> Холод </td>
                        <td> Тепло </td>
                    </tr>
                    <tr>
                        <td>{{ $model['performance_cold'] ?? '-' }}</td>
                        <td>{{ $model['performance_warm'] ?? '-' }}</td>
                    </tr>

                    <thead>
                        <td colspan="2" class="px-3 fs-5"> Потребляемая мощность</td>
                    </thead>
                    <tr>
                        <td> Холод </td>
                        <td> Тепло </td>
                    </tr>
                    <tr>
                        <td>{{ $model['power_input_cold'] ?? '-' }}</td>
                        <td>{{ $model['power_input_warm'] ?? '-' }}</td>
                    </tr>

                    <thead>
                        <td colspan="2" class="px-3 fs-5">Особенности</td>

                    </thead>
                    <tr>
                        <td>Wi-Fi</td>
                        <td>{{ $model['wi-fi'] ? 'Да' : 'Нет' }}</td>
                    </tr>
                    <tr>
                        <td>Размеры внутреннего блока</td>
                        <td>{{ $model['indoor_sizes'] }}</td>
                    </tr>
                </table>
            </div>

            <div class="tab-pane fade show" id="install-tab-pane" role="tabpanel" aria-labelledby="install-tab"
                tabindex="0">
                <h5 class="mt-3 px-2 text-center"> Стоимость монтажа:</h5>
                <table class="table table-striped fw-semibold">
                    <thead>
                        <td class="fs-5">Услуга</td>
                        <td class="fs-5">Цена</td>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service['name'] }}</td>
                                <td>{{ is_numeric($service['price']) ? number_format($service['price'], 2, ',', ' ') . ' руб.' : $service['price'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p>
                    В стоимость уже включены кронштейны и крепежный материал.
                    Дополнительно оплачивается фактический метраж межблочной трассы.
                </p>
                <p>
                    Наши монтажники опытные специалисты и имеют все необходимые знания и навыки.
                    Мы за индивидуальный подход и мы учтем все ваши пожелания.
                </p>

            </div>

            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                tabindex="0">


                <h5 class="mt-3 px-2 text-center">Дополнительные услуги:</h5>
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
                                <td>{{ is_numeric($service['price']) ? number_format($service['price'], 2, ',', ' ') . ' руб.' : $service['price'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Pills content -->
    </div>
</div>
