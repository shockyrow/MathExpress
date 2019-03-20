<div class="container">
    <div class="row justify-content-center" id="list">
        {{ $slot }}
    </div>
    <div class="d-flex justify-content-center my-3">
        {{ $data->appends($_GET)->onEachSide(1)->links() }}
    </div>
</div>