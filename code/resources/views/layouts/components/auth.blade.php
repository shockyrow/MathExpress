<div class="container my-3">
    <div class="row d-flex flex-wrap justify-content-center flex-row-reverse my-5">
        <div class="p-4">
            <img class="w-100" src="{{URL::asset('/img/login-image.png')}}">
        </div>
        <div class="col col-lg-4">
            <div class="col text-center">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>