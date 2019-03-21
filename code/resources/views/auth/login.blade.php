@extends('layouts.app')

@section('content')
    @component('layouts.components.auth')
        <h2 class="mb-3">
            {{ __('Даромад') }}
        </h2>
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

            <div class="my-2">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" style="color: #4e555b" href="{{ route('password.request') }}">
                        {{ __('Паролро фаромуш кардед?') }}
                    </a>
                @endif
            </div>

            <button type="submit" class="btn btn-success w-75" style="border-radius: 20px">
                {{ __('Логин') }}  <i class="fa fa-angle-right"></i>
            </button>
        </form>

        <div class="my-2">
            Суратхисоб надоред?
            <a href="{{ route('register') }}" style="color: #e3342f">
                Бакайдгиред
            </a>
        </div>
    @endcomponent
@endsection
