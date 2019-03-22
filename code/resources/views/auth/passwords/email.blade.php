@extends('layouts.app')

@section('content')
    @component('layouts.components.auth')
        <h2 class="mb-3">
            {{ __('Ирсоли парол') }}
        </h2>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">

            @csrf
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>

                    <input id="email" placeholder="Сурогаи электрони" type="email" class="form-control" name="email"
                           value="{{ old('email') }}" required autofocus>
                </div>
            </div>
            <button type="submit" class="btn btn-success my-4 w-75">
                {{ __('Паролро равон кунед') }}
            </button>
        </form>
    @endcomponent
@endsection
