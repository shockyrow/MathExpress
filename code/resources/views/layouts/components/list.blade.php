<div class="container">
    <div class="row justify-content-center">
        <div class="col" id="list">
            {{ $slot }}
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{$data->appends($_GET)->onEachSide(1)->links()}}
    </div>
</div>