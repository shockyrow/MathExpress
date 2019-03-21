@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-1"></div>
        <div class="col-4 text-center">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group d-flex align-items-center m-2">
                    <i class="fa fa-user"></i>
                    <input id="name" placeholder="Ному насаб" style="border: 0; box-shadow: none"
                           class="form-control" name="name" required autofocus>
                </div>
                <hr class="m-0" style="background-color: {{ $errors->has('name') ? '#e3342f' : ''}}">
                <div class="input-group d-flex align-items-center m-2">
                    <i class="fa fa-at"></i>
                    <input id="email" placeholder="Сурогаи электрони" type="email" style="border: 0; box-shadow: none"
                           class="form-control" name="email" required autofocus>
                </div>
                <hr class="m-0" style="background-color: {{ $errors->has('email') ? '#e3342f' : ''}}">
                <div class="input-group d-flex align-items-center m-2">
                    <i class="fa fa-lock"></i>
                    <input id="password" placeholder="Парол" type="password" style="border: 0; box-shadow: none"
                           class="form-control" name="password"
                           required>
                </div>
                <hr class="m-0" style="background-color: {{ $errors->has('password') ? '#e3342f' : ''}}">
                <div class="input-group d-flex align-items-center m-2">
                    <i class="fa fa-lock"></i>
                    <input id="password-confirm" placeholder="Такрори парол" type="password" style="border: 0; box-shadow: none"
                           class="form-control" name="password_confirmation"
                           required>
                </div>
                <hr class="m-0" style="background-color: {{ $errors->has('password') ? '#e3342f' : ''}}">
                <button type="submit" class="btn btn-success my-5 w-75" style="border-radius: 20px">
                    {{ __('Бакайдриред') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
