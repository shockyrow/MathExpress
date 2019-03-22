@extends('layouts.app')

@section('content')
    @component('layouts.components.auth')
        <h2 class="mb-3">
            {{ __('Ивази парол') }}
        </h2>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>

                    <input id="email" placeholder="Сурогаи электрони" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autofocus>
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

            <button type="submit" class="btn btn-success my-4 w-75" style="border-radius: 20px">
                {{ __('Иваз кунед') }}
            </button>
        </form>
    @endcomponent
@endsection
