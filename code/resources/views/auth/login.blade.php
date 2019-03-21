@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row d-flex flex-wrap justify-content-center flex-row-reverse">
            <div class="p-5">
                <img class="w-100" src="{{URL::asset('/img/login-page.png')}}">
            </div>
            <div class="col col-lg-4 d-flex align-items-center">
                <div class="col text-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>

                                <input id="email" placeholder="Сурогаи электрони" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>

                            <input id="password" placeholder="Парол" type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                        </div>

                        <div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" style="color: #4e555b" href="{{ route('password.request') }}">
                                    {{ __('Паролро фаромуш кардед?') }}
                                </a>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-success mt-3 w-75" style="border-radius: 20px">
                            {{ __('Логин') }}  <i class="fa fa-angle-right"></i>
                        </button>
                    </form>

                    <div class="my-2">
                        Суратхисоб надоред?
                        <a href="{{ route('register') }}" style="color: #e3342f">
                            Бакайдгиред
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
