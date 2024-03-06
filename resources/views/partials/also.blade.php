<div class="col-lg-4">
    <div class="px-0 rounded-2 shadow-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">В этой серии:</h5>
                @foreach ($models as $model)
                    <hr>

                    <div class="d-flex mb-3 flex-column flex-md-row flex-lg-column justify-content-center">
                        <div class="mx-auto">
                            <div class="img-wrap">
                                <a href="{{ route('conditioners.show', ['conditioner' => $model['id']]) }}"
                                    data-abc="true">
                                    <img
                                        src="{{ asset('storage/' . ($conditioner['images'][0] ?? 'placeholder.jpg')) }}">
                                </a>
                            </div>
                        </div>
                        <div class="info fw-semibold">
                            <a href="{{ route('conditioners.show', ['conditioner' => $model['id']]) }}"
                                class="nav-link mb-1">
                                {{ $conditioner['name'] . ' ' . $model['name'] }}
                            </a>
                            <a class='d-flex justify-content-between'
                                href="{{ route('conditioners.index', ['area[]' => $model['area']]) }}">
                                <p class='text-muted'>Площадь</p>
                                <p class='text-muted'>{{ $model['area'] }}м. кв.</p>
                            </a>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-buy">
                                    <span class="h6">Заказать за
                                        @if ($model['promo_price'])
                                            <strong
                                                class="fs-6">{{ number_format($model['promo_price'], 2, ',', ' ') }}₽</strong>
                                            <span
                                                class='text-decoration-line-through text-muted'>{{ number_format($model['price'], 2, ',', ' ') }}₽</span>
                                        @else
                                            <strong
                                                class="fs-6">{{ number_format($model['price'], 2, ',', ' ') }}₽</strong>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
