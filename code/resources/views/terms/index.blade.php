@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.titleWithSearch', ['search_text' => 'Номи Махфум', 'search_url' => route('terms.index')])
            Махфумхои Мухим
        @endcomponent
        <div class="d-flex justify-content-center my-5">
            <div class="btn-group btn-group-sm">
                <a class="btn btn-secondary" href="{{route('terms.searchByLetter', 'A')}}">A</a>
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
            <div class="col-12 mb-3">
                <div class=""
                     id="termsList"
                >
                    @foreach($terms as $term)
                        <div class="card bg-white shadow mb-3">
                            <div class="btn card-body text-justify"
                                 id="heading{{$term->getId()}}"
                                 data-toggle="collapse"
                                 data-target="#collapse{{$term->getId()}}"
                                 aria-expanded="false"
                                 aria-controls="collapse{{$term->getId()}}"
                            >
                                <div class="row">
                                    <div class="col-10">
                                        <h3 class="mb-0 text-justify">
                                            {{$term->getTitle()}}
                                        </h3>
                                    </div>
                                    <div class="col d-flex pr-4 justify-content-end">
                                        <a href="{{route('terms.edit', $term->getId())}}">
                                            <i class="pr-4 fa fa-pencil-alt"></i>
                                        </a>
                                        <a href="{{route('terms.destroy', $term->getId())}}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div id="collapse{{$term->getId()}}"
                                 class="collapse bg-light border-top"
                                 aria-labelledby="heading{{$term->getId()}}"
                                 data-parent="#termsList"
                            >
                                <div class="card-body">
                                    {{$term->getBody()}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{$terms->appends($_GET)->links()}}
        </div>
    </div>
    <button class="floating-button floating-button-br rounded-circle btn btn-primary">
        <i class="fa fa-plus"></i>
    </button>
@endsection
