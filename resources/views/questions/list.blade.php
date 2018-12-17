@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h2>Саволхои охирин</h2>
            </div>
            <div class="col  d-flex justify-content-end">
                <a
                 class="btn btn-primary"
                 href="{{ route('questions.create') }}">
                     Саволи нав
                </a>
            </div>
        </div>
        <div class="row justify-content-left">
            @for($i = 0; $i < 15; $i++)
                <div class="col-12">
                    <a href="{{ route('questions.show', 1) }}" class="btn p-0 card shadow mb-3 text-justify">
                        <div class="card-body">
                                <div class="row">
                                    <div class="col p-2 d-flex justify-content-center">
                                        @if($i % 3 == 0)
                                            <button type="button" class="btn mr-2 btn-success align-self-center">
                                                <h2>5</h2>
                                                <small>чавобхо</small>
                                            </button>
                                        @elseif ($i % 3 == 1)
                                            <button type="button" class="btn mr-2 btn-primary-outline align-self-center">
                                                <h2>0</h2>
                                                <small>чавобхо</small>
                                            </button>
                                        @else
                                            <button type="button" class="btn mr-2 btn-outline-success align-self-center">
                                                <h2>2</h2>
                                                <small>чавобхо</small>
                                            </button>
                                        @endif
                                        <button type="button" class="btn btn-primary-outline align-self-center">
                                            <h2>15</h2>
                                            <small>дидан</small>
                                        </button>
                                    </div>
                                    <div class="col-10 p-3">
                                        <h3>Масохати секунчаро читавр меёбед?</h3>
                                        <div class="row">
                                            <div class="col-8">
                                                <button type="button" class="btn btn-secondary btn-sm">геометрия</button>
                                                <button type="button" class="btn btn-secondary btn-sm">граф</button>
                                                <button type="button" class="btn btn-secondary btn-sm">сентроид</button>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="text-right" style="color: #000000"><small><strong>Али Валиев </strong>пурсидааст</small></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
@endsection
