@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.titleWithSearch', ['search_text' => 'Номи китоб', 'search_url' => route('docs.index')])
            Китобхои охирин
        @endcomponent
        <div class="row justify-content-left">
            @foreach($docs as $doc)
                <div class="col-12 col-md-6">
                    <div class="p-0 card shadow mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <img src="{{ Storage::url($doc->getThumbnail()) }}"
                                         class="rounded shadow-sm w-100"
                                    />
                                    <a href="{{route("docs.show", $doc->getId())}}" style="text-decoration : none">
                                        <button type="button"
                                                class="btn btn-outline-success btn-block shadow-sm my-3"
                                        >
                                            Кушоед
                                        </button>
                                    </a>
                                </div>
                                <div class="col">
                                    <h2>
                                        {{ $doc->getTitle() }}
                                    </h2>
                                    <h4>
                                        <small>{{ $doc->getAuthor() }}</small>
                                    </h4>
                                    <hr>
                                    <p class="text-justify">
                                        {{ $doc->getDescription() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center w-100">
                {{$docs->appends($_GET)->links()}}
            </div>
        </div>
    </div>
@endsection