<div class="container d-flex justify-content-center ">
    <figure class="card card-product-grid card-lg rounded-4"> <a
            href="{{ route('conditioners.show', ['conditioner' => $id]) }}" class="img-wrap" data-abc="true"> <img
                src="{{ asset("storage/$image") }}">
        </a>
        @if ($promo_price)
            <div class="position-absolute ml-auto" style="right: 20px; top: 10px; z-index:1000;">
                <h5>
                    <span class='badge text-bg-danger bg-red bg-gradient'>
                        -{{ (1 - round($promo_price / $price, 2)) * 100 }}%</span>
                </h5>
            </div>
        @endif
        <figcaption class="info-wrap text-center">
            <div class='card-text'>
                <a href="{{ route('conditioners.show', ['conditioner' => $id]) }}" class="title" data-abc="true">
                    <h5>{{ $name }}</h5>
                </a>
            </div>
        </figcaption>
        <div class="card-body fw-semibold">
            <a class='d-flex justify-content-between' href="{{ route('conditioners.index', ['brand' => [$brand]]) }}">
                <p class='text-muted'>Марка</p>
                <p class='text-muted fw-medium'>{{ $brand }}</p>
            </a>
            <a class='d-flex justify-content-between' href="{{ route('conditioners.index', ['area' => [$area]]) }}">
                <p class='text-muted'>Площадь</p>
                <p class='text-muted fw-medium'>{{ $area }} м. кв.</p>
            </a>
            <a class='d-flex justify-content-between' href="{{ route('conditioners.index', ['type' => [$type]]) }}">
                <p class='text-muted'>Тип</p>
                <p class='text-muted fw-medium'>{{ $type }}</p>
            </a>
            <a class='d-flex justify-content-between'
                href="{{ route('conditioners.index', ['invertor' => [$invertor]]) }}">
                <p class='text-muted'>Инвертор</p>
                <p class='text-muted fw-medium'>{{ $type ? 'Да' : 'Нет' }}</p>
            </a>


        </div>
        <a class=" btn btn-buy w-100 rounded-4-bottom fw-semibold bg-gradient"
            href="{{ route('conditioners.show', ['conditioner' => $id]) }}">
            Купить за
            @if ($promo_price)
                <strong class="fs-5">{{ number_format($promo_price, 2, ',', ' ') }}₽</strong> <span
                    class='text-decoration-line-through text-muted'>{{ number_format($price, 2, ',', ' ') }}₽</span>
            @else
                <strong class="fs-5">{{ number_format($price, 2, ',', ' ') }}₽</strong>
            @endif
        </a>
    </figure>
</div>
