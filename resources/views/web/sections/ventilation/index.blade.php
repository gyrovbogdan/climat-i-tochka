@extends('web.layout.master')

@section('title')
    Вентиляция
@endsection

@push('stylesheets')
    @vite('public/css/app/sections/ventilation/app.css')
@endpush


@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 align-items-md-center py-5 fw-semibold">
            <div class="col d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold text-body-emphasis">Как мы работаем?</h2>
                <p class="text-body-secondary">Компания "Климат и точка Крым" предлагает комплексные решения по установке
                    систем вентиляции для любых объектов.</p>
                <a class="btn btn-primary btn-lg bg-gradient" data-bs-toggle="modal" data-bs-target="#contact-modal">Заказать
                    расчет</a>
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" fill="currentColor"
                                class="bi bi-1-square-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm7.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383z" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Оставьте заявку</h4>
                        <p class="text-body-secondary">Оставьте заявку в наших соц. сетях или по телефону</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" fill="currentColor"
                                class="bi bi-2-square-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm4.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Получите бесплатный расчет</h4>
                        <p class="text-body-secondary">В ходе
                            расчета стоимости и определения условий монтажных работ осуществляется выезд на объект
                            специалиста.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" fill="currentColor"
                                class="bi bi-3-square-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm5.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Изготовление фасонных элементов</h4>
                        <p class="text-body-secondary">Заказ передаётся в цех для изготовления фасонных элементов.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" fill="currentColor"
                                class="bi bi-4-square-fill" viewBox="0 0 16 16">
                                <path d="M6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218" />
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm5.519 5.057q.33-.527.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265Z" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Выполнение монтажных работ</h4>
                        <p class="text-body-secondary">Выполнение монтажных и пуско-наладочных работ.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2>Часто задаваемые вопросы</h2>
        <div class="accordion my-4 fw-semibold" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-semibold fs-5" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Как рассчитать стоимость вентиляции в частном доме?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Для определения стоимости выполнения монтажных работ по обустройству системы вентиляции зданий и
                        сооружений необходимо направить в наш адрес имеющийся проект, а при его отсутствии необходимые
                        характеристики и планы помещений. Вы можете перезвонить нашим специалистам по
                        тел.
                        <a href="tel:{{ $phone }}">{{ $phone }}</a>.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Как одновременно сделать вентиляцию и кондиционирование?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        На этапе выполнения строительных работ мы всегда рекомендуем заблаговременно принять решение о
                        возможной установке систем кондиционирования и вентиляции. Ведь основные этапы монтажных работ
                        должны быть выполнены до окончания строительных и отделочных работ. Подробнее Вы можете узнать у
                        наших специалистов по тел. <a href="tel:{{ $phone }}">{{ $phone }}</a>.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Что такое приточная установка воздуха?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Приточная система вентиляции - это сложная структура, которая состоит из множества компонентов,
                        поэтому подобная работа должна быть выполнена опытными специалистами. Для расчета стоимости и
                        выезда
                        инженера на объект оставьте заявку или перезвоните по тел <a
                            href="tel:{{ $phone }}">{{ $phone }}</a>.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Что такое вытяжная система вентиляции?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Для обеспечения нормальной циркуляции и обмена воздушных масс необходима установка вытяжных
                        систем
                        вентиляции. Чтобы выполнить правильный расчет необходимо обратиться к нашим специалистам по тел.
                        <a href="tel:{{ $phone }}">{{ $phone }}</a>.
                    </div>
                </div>
            </div>
        </div>

        <h1>Кратность воздухообмена в помещениях (СНиП)</h1>
        <section>
            <p>
                Вентиляция - это важный фактор, обеспечивающий комфортный микроклимат в помещении.
                СНиП (Строительные нормы и правила) регламентируют кратность воздухообмена для различных типов
                помещений.
                Кратность воздухообмена - это число, которое показывает, сколько раз в час воздух в помещении должен
                быть
                полностью заменен свежим.
            </p>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Тип помещения</th>
                        <th>Кратность</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Магазины</td>
                        <td>8-10</td>
                    </tr>
                    <tr>
                        <td>Парикмахерские</td>
                        <td>10-15</td>
                    </tr>
                    <tr>
                        <td>Пекарни</td>
                        <td>20-30</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary my-4 bg-gradient" data-bs-toggle="modal"
                data-bs-target="#contact-modal">Расчитать стоимость монтажа вентиляции
                бесплатно</button>
        </section>

        <h2>Приточная система вентиляции</h2>
        <section>
            <p>
                Приточная система вентиляции - это эффективный способ обеспечения притока свежего воздуха в помещение.
                Она обеспечивает комфортный микроклимат, независимо от погодных условий.
            </p>
            <h6>
                Преимущества приточной системы вентиляции:
            </h6>
            <ul>
                <li>Универсальность применения</li>
                <li>Быстрая и эффективная доставка свежего воздуха</li>
                <li>Очистка и фильтрация воздуха</li>
                <li>Поддержание комфортной температуры</li>
            </ul>
            <h6>
                Недостатки приточной системы вентиляции:
            </h6>
            <ul>
                <li>Большие габариты приточных установок</li>
                <li>Высокий уровень шумности</li>
            </ul>
            <button type="button" class="btn btn-primary bg-gradient" data-bs-toggle="modal"
                data-bs-target="#contact-modal">Заказать монтаж приточной системы
                вентиляции</button>
        </section>
    </div>
@endsection
