<div class="container d-flex justify-content-center ">
    <figure class="card card-product-grid card-lg rounded-4"> <a
            href="{{ route('conditioners.show', ['conditioner' => $id]) }}" class="img-wrap" data-abc="true"> <img
                src="{{ $image }}"> </a>
        <figcaption class="info-wrap text-center">
            <div class='card-text'>
                <a href="#" class="title" data-abc="true">
                    <h5>{{ $name }}</h5>
                </a>
            </div>
        </figcaption>
        <div class="card-body">
            <div class='d-flex justify-content-between'>
                <p class='text-muted'>Марка</p>
                <p class='text-muted fw-medium'>{{ $brand }}</p>
            </div>
            <div class='d-flex justify-content-between'>
                <p class='text-muted'>Площадь</p>
                <p class='text-muted fw-medium'>{{ $area }} м. кв.</p>
            </div>
            <div class='d-flex justify-content-between'>
                <p class='text-muted'>Страна</p>
                <p class='text-muted fw-medium'>{{ $country }}</p>
            </div>
        </div>
        <button class=" btn btn-warning w-100 rounded-4-bottom fs-5">
            Купить за <strong>{{ $price }} ₽</strong>
        </button>
    </figure>
</div>
