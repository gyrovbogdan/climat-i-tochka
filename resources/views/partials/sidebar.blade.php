<button class="btn btn-outline-dark fixed-top z-600 bg-white" style="top:66px; left:10px; width:40px" type="button"
    data-bs-toggle="collapse" data-bs-target="#collapse-sidebar" aria-expanded="false" aria-controls="collapse-sidebar">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z" />
    </svg>
</button>

<div class="collapse collapse-horizontal fixed-top z-600" style="top:56px;max-width:280px" id="collapse-sidebar">
    <div class="p-3 bg-white border-end overflow-auto sidebar">
        <div class='d-flex justify-content-between'>
            <span class="fs-5 fw-semibold">Фильтр</span>
            <div class="d-flex">
                <div class='py-2'> <a href="{{ route('conditioners.index') }}" class="link-danger">Очистить</a></div>
                <button class="btn btn-outline" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-sidebar" aria-expanded="false" aria-controls="collapse-sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg></button>
            </div>
        </div>

        <form action="{{ route('conditioners.index') }}">
            <div class="input-group my-3">
                <input type="text" class="form-control" name="search" placeholder="Название кондиционера"
                    value="{{ isset(request()->query()['search']) ? e(request()->query()['search']) : '' }}"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg></button>
            </div>

            <h6>Марка:</h6>
            <section class="sidebar-list overflow-auto px-2">
                @foreach ($filter['brand'] as $brand)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="brand[]" value="{{ $brand }}"
                            {{ isset(request()->query()['brand']) && in_array($brand, request()->query()['brand']) ? 'checked' : '' }}
                            id="checkbox-{{ $brand }}">
                        <label class="form-check-label" for="checkbox-{{ $brand }}">
                            {{ $brand }}
                        </label>
                    </div>
                @endforeach
            </section>

            <h6>Площадь:</h6>
            <section class="sidebar-list overflow-auto px-2">
                @foreach ($filter['area'] as $area)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="area[]" value="{{ $area }}"
                            {{ isset(request()->query()['area']) && in_array($area, request()->query()['area']) ? 'checked' : '' }}
                            id="checkbox-{{ $area }}">
                        <label class="form-check-label" for="checkbox-{{ $area }}">
                            {{ $area }}
                        </label>
                    </div>
                @endforeach
            </section>

            <h6>Страна:</h6>
            <section class="sidebar-list overflow-auto px-2">
                @foreach ($filter['country'] as $country)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="country[]" value="{{ $country }}"
                            {{ isset(request()->query()['country']) && in_array($country, request()->query()['country']) ? 'checked' : '' }}
                            id="checkbox-{{ $country }}">
                        <label class="form-check-label" for="checkbox-{{ $country }}">
                            {{ $country }}
                        </label>
                    </div>
                @endforeach
            </section>
            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-secondary w-100 my-3">Поиск
                </button>
            </div>
        </form>
    </div>
</div>
