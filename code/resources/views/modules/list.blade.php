@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.titleWithSearch')
            Хамаи Модулхо
            @slot('search_text')
                Номи Модул
            @endslot
        @endcomponent
        <div class="row justify-content-center">
            @for($i = 0; $i < 15; $i++)
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-module-item">
                    <div class="module-thumb">
                        <a href="{{ route('modules.show', $i) }}"><img src="{{ asset('img/module-example.jpg') }}" alt=""></a>
                    </div>
                    <div class="mx-4 my-4">
                        <h4><strong>Модули 12.1. Номи мавзуъ мешавад инчаба</strong></h4>
                        <div class="d-flex my-2">
                            <p>Фев 01, 2018</p>
                            <p class="mx-3">проф. Али Валиев</p>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
@endsection
