<div class="col-lg-8 mb-4">
    <div class="border rounded-2 px-3 py-2 bg-white">
        <!-- Pills navs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
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
                    type="button" role="tab" aria-controls="profile-tab-pane"
                    aria-selected="false">Обслуживание</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel"
                aria-labelledby="description-tab" tabindex="0">
                <h5 class="mt-3 px-2">{{ $model['conditioner']['name'] . ' ' . $model['name'] }}</h5>
                <table class="table table-striped fw-semibold">
                    <thead>
                        <td colspan="2" class="px-3 fs-5"> Производительность </td>
                    </thead>
                    <tr>
                        <td> Холод </td>
                        <td> Тепло </td>
                    </tr>
                    <tr>
                        <td>{{ $model['performance_cold'] }}</td>
                        <td>{{ $model['performance_warm'] }}</td>
                    </tr>

                    <thead>
                        <td colspan="2" class="px-3 fs-5"> Потребляемая мощность</td>
                    </thead>
                    <tr>
                        <td> Холод </td>
                        <td> Тепло </td>
                    </tr>
                    <tr>
                        <td>{{ $model['power_input_cold'] }}</td>
                        <td>{{ $model['power_input_warm'] }}</td>
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
                <h6 class="mt-3 px-2"> Профессиональная установка кондиционера за 3
                    часа!</h6>
                <ul class="px-5">
                    <li>Бесплатный выезд инженера для консультации.</li>
                    <li>Подбор оптимального места для установки.</li>
                    <li>Соблюдение всех норм и требований.</li>
                    <li>Гарантия на монтаж 1 год.</li>
                </ul>
            </div>

            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                tabindex="0">


                <h6 class="mt-3 px-2"> Продлите срок службы вашего кондиционера!</h6>
                <ul class="px-5">
                    <li>Регулярная чистка и дезинфекция.</li>
                    <li>Проверка работоспособности всех систем.</li>
                    <li>Дозаправка хладагента.</li>
                    <li>Гарантия на обслуживание 1 год.</li>
                </ul>
            </div>
        </div>
        <!-- Pills content -->
    </div>
</div>
