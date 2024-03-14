<button class="btn btn-outline-dark fixed-top z-600 bg-white" style="top:66px; left:10px; width:40px" type="button"
    data-bs-toggle="collapse" data-bs-target="#collapse-sidebar" aria-expanded="false" aria-controls="collapse-sidebar">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter"
        viewBox="0 0 16 16">
        <path
            d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
    </svg>
</button>

<div class="collapse collapse-horizontal fixed-top z-600 sidebar-wrapper" id="collapse-sidebar">
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
            <section class="input-group my-3">
                <input type="text" class="form-control" name="search" placeholder="Название кондиционера"
                    value="{{ isset(request()->query()['search']) ? request()->query()['search'] : '' }}"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg></button>
            </section>

            <section>
                <h6><label for="sort">Отсортировать по:</label></h6>
                <select class="form-select" aria-label="select" name='sort' id='sort'>
                    <option value="desc">По возрастанию цены</option>
                    <option value="asc" selected>По убыванию цены</option>
                </select>
            </section>

            @foreach ($filterByArray as $filterName => $filter)
                <h6 class='my-2'>{{ $filterName }}:</h6>
                <section class="sidebar-list overflow-auto px-2">
                    @foreach ($filter['values'] as $value)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="{{ $filter['name'] }}[]"
                                value="{{ $value }}" @if (isset(request()->query()[$filter['name']]) &&
                                        is_array(request()->query()[$filter['name']]) &&
                                        in_array($value, request()->query()[$filter['name']])) {{ 'checked' }} @endif
                                id="checkbox-{{ $value }}">
                            <label class="form-check-label" for="checkbox-{{ $value }}">
                                {{ $value }}
                            </label>
                        </div>
                    @endforeach
                </section>
            @endforeach

            @foreach ($filterByBoolean as $filterName => $name)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="{{ $name }}" value="1"
                        {{ isset(request()->query()[$name]) ? 'checked' : '' }} id="checkbox-{{ $name }}">
                    <h6> <label class="form-check-label" for="checkbox-{{ $name }}">
                            {{ $filterName }}
                        </label>
                    </h6>
                </div>
            @endforeach

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary w-100 my-3 bg-gradient">Поиск
                </button>
            </div>
        </form>
    </div>
</div>
