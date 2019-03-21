@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex flex-wrap justify-content-center flex-row-reverse my-5">
            <div class="px-5">
                <img class="w-100" src="{{URL::asset('/img/login-image.png')}}">
            </div>
            <div class="col col-lg-4">
                <div class="col text-center">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>

                        <input id="name" placeholder="Ному насаб" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-at"></i></span>
                        </div>

                        <input id="email" placeholder="Сурогаи электрони" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>

                        <input id="password" placeholder="Парол" type="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>

                        <input id="password-confirm" placeholder="Такрори парол" type="password" class="form-control" name="password_confirmation" value="{{ old('password') }}" required autofocus>
                    </div>
                </div>
                <button type="submit" class="btn btn-success my-5 w-75" style="border-radius: 20px">
                    {{ __('Бакайдриред') }}
                </button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
