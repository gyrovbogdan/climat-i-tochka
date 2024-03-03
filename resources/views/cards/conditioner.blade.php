<div class="container d-flex justify-content-center ">
    <figure class="card card-product-grid card-lg rounded-4"> <a
            href="{{ route('conditioners.show', ['conditioner' => $id]) }}" class="img-wrap" data-abc="true"> <img
                src="{{ $image ? asset("storage/$image") : asset('storage/placeholder.jpg') }}">
        </a>
        <figcaption class="info-wrap text-center">
            <div class='card-text'>
                <a href="{{ route('conditioners.show', ['conditioner' => $id]) }}" class="title" data-abc="true">
                    <h5>{{ $name }}</h5>
                </a>
            </div>
        </figcaption>
        <div class="card-body fw-semibold">
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
        <a class=" btn btn-buy w-100 rounded-4-bottom fs-5"
            href="{{ route('conditioners.show', ['conditioner' => $id]) }}">
            Купить за <strong>{{ $price }} ₽</strong>
        </a>
    </figure>
</div>
