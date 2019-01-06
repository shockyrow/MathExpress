<div class="row mb-3">
    <div class="col">
        <h2 class="font-weight-bold">
            {{ $slot }}
            <form class="form-inline float-right">
                <input class="form-control mr-sm-2" type="search" placeholder="{{ $search_text }}" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Кофтан</button>
            </form>
        </h2>
    </div>
</div>