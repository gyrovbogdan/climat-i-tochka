<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item first-image active">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Жара не страшна!</h1>
                    <p class="caption-text fw-semibold">Профессиональная установка кондиционеров за 1 день.</p>
                    <p><a class="btn btn-lg btn-outline-light bg-blur" href="{{ route('conditioners.index') }}">
                            Получить скидку
                            10%</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item second-image">
            <div class="container">
                <div class="carousel-caption text-center">
                    <h1>Свежий воздух и комфорт в вашем доме</h1>
                    <p class="caption-text fw-semibold mx-auto">Сплит-системы и системы вентиляции от компании "Климат и
                        точка
                        Крым".
                    </p>
                    <p><a class="btn btn-lg btn-outline-light bg-blur" href="{{ route('conditioners.index') }}">Узнать
                            больше</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item third-image">
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>Дышите легко!</h1>
                    <p class="caption-text fw-semibold ml-auto">Очистка и дезинфекция систем вентиляции.</p>
                    <p><a class="btn btn-lg btn-light" href="{{ route('conditioners.index') }}">Заказать чистку</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>