<div id="carouselExampleIndicators" class="carousel carousel-dark border slide bg-white h-100 w-100"
    data-bs-ride="carousel" style="min-height: 300px">
    <div class="carousel-indicators">
        @foreach ($images as $key => $image)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
                class="{{ $key == 0 ? 'active' : '' }}" aria-current="true"
                aria-label="Slide {{ $key }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner w-100 h-100">
        @foreach ($images as $key => $image)
            <div class="carousel-item w-100 h-100 {{ $key === 0 ? 'active' : '' }}">
                <div class="d-block w-100 h-100 carousel-image"
                    style="background-image: url('{{ asset("storage/$image") }}')">
                </div>
            </div>
        @endforeach
    </div>
    @if (count($images) > 1)
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    @endif
    @if ($promo_price)
        <div class="position-absolute ml-auto" style="top:10px; left:10px">
            <h5>
                <span class='badge text-bg-danger bg-red'>
                    -{{ $promo_price && $price ? (1 - round($promo_price / $price, 2)) * 100 : '' }}%</span>
            </h5>
        </div>
    @endif
</div>
