@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.titleWithSearch')
            Махфумхои Мухим
            @slot('search_text')
                Номи Махфум
            @endslot
        @endcomponent
        <div class="d-flex justify-content-center my-2">
            <div class="btn-group btn-group-sm">
                <button class="btn btn-secondary">A</button>
                <button class="btn btn-secondary">Б</button>
                <button class="btn btn-secondary">В</button>
                <button class="btn btn-secondary">Г</button>
                <button class="btn btn-secondary">Ғ</button>
                <button class="btn btn-secondary">Д</button>
                <button class="btn btn-secondary">Е</button>
                <button class="btn btn-secondary">Ё</button>
                <button class="btn btn-secondary">Ж</button>
                <button class="btn btn-secondary">З</button>
                <button class="btn btn-secondary">И</button>
                <button class="btn btn-secondary">Ӣ</button>
                <button class="btn btn-secondary">Й</button>
                <button class="btn btn-secondary">К</button>
                <button class="btn btn-secondary">Қ</button>
                <button class="btn btn-secondary">Л</button>
                <button class="btn btn-secondary">М</button>
                <button class="btn btn-secondary">Н</button>
                <button class="btn btn-secondary">О</button>
                <button class="btn btn-secondary">П</button>
                <button class="btn btn-secondary">Р</button>
                <button class="btn btn-secondary">С</button>
                <button class="btn btn-secondary">Т</button>
                <button class="btn btn-secondary">У</button>
                <button class="btn btn-secondary">Ӯ</button>
                <button class="btn btn-secondary">Ф</button>
                <button class="btn btn-secondary">Х</button>
                <button class="btn btn-secondary">Ҳ</button>
                <button class="btn btn-secondary">Ч</button>
                <button class="btn btn-secondary">Ҷ</button>
                <button class="btn btn-secondary">Ш</button>
                <button class="btn btn-secondary">Ъ</button>
                <button class="btn btn-secondary">Э</button>
                <button class="btn btn-secondary">Ю</button>
                <button class="btn btn-secondary">Я</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class=""
                     id="termsList"
                >
                    @for($i = 0; $i < 15; $i++)
                        <div class="card bg-white shadow my-1">
                            <div class="card-header"
                                 id="heading{{$i}}"
                            >
                                <h5 class="mb-0">
                                    <button class="btn btn-link"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapse{{$i}}"
                                            aria-expanded="false"
                                            aria-controls="collapse{{$i}}"
                                    >
                                        Мафҳуми логарифм
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{$i}}"
                                 class="collapse"
                                 aria-labelledby="heading{{$i}}"
                                 data-parent="#termsList"
                            >
                                <div class="card-body">
                                    Логарифми адади мусбати N  аз рӯи асоси b ( b>0,b≠1 ) гуфта нишондиҳандаи дараҷа x, ки ба он b-ро барои ҳосил намудани N бардоштан лозим аст, меноманд. Ишораи логарифм: logbN=x. Ин навишт ба баробарии зерин баробарқувва аст: bx=N.
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
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
