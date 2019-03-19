@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.titleWithSearch', ['search_text' => 'Номи Махфум', 'search_url' => route('terms.index')])
            Махфумхои Мухим
        @endcomponent
        <div class="d-flex justify-content-center my-5">
            <div class="btn-group btn-group-sm">
                @foreach (['А', 'Б', 'В', 'Г','Ғ', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Ӣ', 'Ӣ', 'К', 'Қ', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ӯ', 'Ф', 'Х', 'Ҳ', 'Ч', 'Ҷ', 'Ш', 'ъ', 'Э', 'Ю', 'Я'] as $letter)
                    <a class="btn btn-secondary" href="{{route('terms.index', ['q' => $letter, 'searchType' => 1])}}">{{$letter}}</a>
                @endforeach
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
                                    <div class="col d-flex pr-4 justify-content-end align-items-center">
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
