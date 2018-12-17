@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h2>
                    Саволхои охирин
                    <a
                            class="btn btn-primary float-right"
                            href="{{ route('questions.create') }}"
                    >
                        Саволи нав
                    </a>
                </h2>
            </div>
        </div>
        <div class="row justify-content-left">
            @for($i = 0; $i < 15; $i++)
                <div class="col-12">
                    <a href="{{ route('questions.show', 1) }}"
                       class="btn p-0 card shadow mb-3 text-justify"
                    >
                        <div class="card-body">
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center">
                                    @if($i % 3 == 0)
                                        <button type="button"
                                                class="btn mr-2 btn-success align-self-center h-100"
                                        >
                                            <h2>5</h2>
                                            <small>чавобхо</small>
                                        </button>
                                    @elseif ($i % 3 == 1)
                                        <button type="button"
                                                class="btn mr-2 btn-primary-outline align-self-center h-100"
                                        >
                                            <h2>0</h2>
                                            <small>чавобхо</small>
                                        </button>
                                    @else
                                        <button type="button"
                                                class="btn mr-2 btn-outline-success align-self-center h-100"
                                        >
                                            <h2>2</h2>
                                            <small>чавобхо</small>
                                        </button>
                                    @endif
                                    <button type="button"
                                            class="btn btn-primary-outline align-self-center h-100"
                                    >
                                        <h2>15</h2>
                                        <small>дидан</small>
                                    </button>
                                </div>
                                <div class="col-12 col-md-10 p-3">
                                    <h3 class="mb-0"
                                        style="white-space: normal;"
                                    >
                                        Масохати секунчаро читавр меёбед?
                                    </h3>
                                    <h5>
                                        <small>
                                            <strong>
                                                Али Валиев
                                            </strong>
                                            пурсидааст
                                        </small>
                                    </h5>
                                    <div class="d-flex">
                                        <span class="badge badge-secondary mr-1">
                                            геометрия
                                        </span>
                                        <span class="badge badge-secondary mr-1">
                                            граф
                                        </span>
                                        <span class="badge badge-secondary mr-1">
                                            сентроид
                                        </span>
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
