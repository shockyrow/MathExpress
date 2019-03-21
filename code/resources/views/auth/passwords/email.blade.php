@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-3"></div>
        <div class="col-3 text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">

                @csrf
                <div class="input-group d-flex align-items-center m-2">
                    <i class="fa fa-user"></i>
                    <input id="email" placeholder="Сурогаи электрони" type="email" style="border: 0; box-shadow: none"
                           class="form-control" name="email"
                           value="{{ old('email') }}" required autofocus>
                </div>
                <hr class="m-0" style="background-color: {{ $errors->has('email') ? '#e3342f' : ''}}">
                <button type="submit" class="btn btn-success my-4 w-75" style="border-radius: 20px">
                    {{ __('Паролро равон кунед') }}
                </button>
            </form>
        </div>
        <div class="col-3">
            <img src="{{URL::asset('/img/login-page.png')}}">
        </div>
    </div>
</div>
@endsection
