@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-3"></div>
            <div class="col-3 text-center">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group d-flex align-items-center m-2">
                        <i class="fa fa-user"></i>
                        <input id="email" placeholder="Сурогаи электрони" type="email" style="border: 0; box-shadow: none"
                               class="form-control" name="email"
                               value="{{ old('email') }}" required autofocus>
                    </div>
                    <hr class="m-0" style="background-color: {{ $errors->has('email') ? '#e3342f' : ''}}">
                    <div class="input-group d-flex align-items-center m-2">
                        <i class="fa fa-lock"></i>
                        <input id="password" placeholder="Парол" type="password" style="border: 0; box-shadow: none"
                               class="form-control" name="password" value="{{ old('password') }}"
                               required>
                    </div>
                    <hr class="m-0" style="background-color: {{ $errors->has('email') ? '#e3342f' : ''}}">

                    <div class="my-4">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" style="color: #4e555b" href="{{ route('password.request') }}">
                                {{ __('Паролро фаромуш кардед?') }}
                            </a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success my-4 w-75" style="border-radius: 20px">
                        {{ __('Логин') }}  <i class="fa fa-angle-right"></i>
                    </button>
                </form>
            </div>
            <div class="col-3">
                <img src="{{URL::asset('/img/login-page.png')}}">
            </div>
        </div>
        <div class="row my-5">
            <div class="col-3"></div>
            <div class="col-3">
                <p style="font-size: small">Суратхисоб надоред?<a class="btn btn-link" href="{{ route('register') }}" style="color: #e3342f">Бакайдгиред</a></p>
            </div>
        </div>
    </div>
@endsection
