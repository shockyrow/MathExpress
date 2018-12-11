@extends('layouts.app')

@section('content')
    <div class="p-3">
        <img src="{{asset('img/logo.png')}}" class="w-100"/>
    </div>

    <div class="d-flex justify-content-around bg-white shadow border rounded p-2 py-3">
        <a href="https://laravel.com/docs">Documentation</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
@endsection
