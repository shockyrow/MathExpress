@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.titleWithSearch')
            Саволхои охирин
            @slot('search_text')
                Номи савол
            @endslot
        @endcomponent
        <div class="row justify-content-left">
            @for($i = 0; $i < 15; $i++)
                <div class="col-12">
                    <a href="{{ route('questions.show', 1) }}"
                       class="btn p-0 card shadow mb-3 text-justify"
                    >
                        <div class="card-body d-flex align-items-center p-3">
                            <h3 class="flex-grow-1 pr-2"
                                style="white-space: normal"
                            >
                                Масохати секунчаро читавр меёбед?
                                <div class="small mt-2">
                                    <span class="badge badge-secondary mr-1 p-1">геометрия</span>
                                    <span class="badge badge-secondary mr-1 p-1">граф</span>
                                    <span class="badge badge-secondary mr-1 p-1">сентроид</span>
                                </div>
                            </h3>
                            <div>
                                @if($i % 3 == 0)
                                    <button type="button"
                                            class="btn btn-sm mr-2 btn-success align-self-center h-100"
                                    >
                                        <h2 class="mb-0">5</h2>
                                        <small>чавобхо</small>
                                    </button>
                                @elseif ($i % 3 == 1)
                                    <button type="button"
                                            class="btn btn-sm mr-2 btn-primary-outline align-self-center h-100"
                                    >
                                        <h2 class="mb-0">0</h2>
                                        <small>чавобхо</small>
                                    </button>
                                @else
                                    <button type="button"
                                            class="btn btn-sm mr-2 btn-outline-success align-self-center h-100"
                                    >
                                        <h2 class="mb-0">2</h2>
                                        <small>чавобхо</small>
                                    </button>
                                @endif
                                <button type="button"
                                        class="btn btn-sm btn-primary-outline align-self-center h-100"
                                >
                                    <h2 class="mb-0">15</h2>
                                    <small>дидан</small>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
        <div class="d-flex justify-content-center">
            <nav>
              <ul class="pagination mt-5">
                <li class="page-item"><a class="page-link" href="#">Аввалин</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">Охирин</a></li>
              </ul>
        </nav>
        </div>
    </div>
@endsection
