<div id="carouselExampleIndicators" class="carousel carousel-dark border slide bg-white" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @if (count($conditioner['images'] ?? ['placeholder.jpg']) > 1)
            @foreach ($conditioner['images'] ?? ['placeholder.jpg'] as $key => $image)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="$key" class="active"
                    aria-current="true" aria-label="Slide $key"></button>
            @endforeach
        @endif
    </div>
    <div class="carousel-inner">
        @foreach ($conditioner['images'] ?? ['placeholder.jpg'] as $key => $image)
            <div class="carousel-item {{ !$key ? 'active' : '' }}">
                <img src="{{ asset("storage/$image") }}" class="d-block w-100" alt="...">
            </div>
        @endforeach
    </div>
    @if (count($conditioner['images'] ?? ['placeholder.jpg']) > 1)
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
</div>
