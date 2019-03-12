@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.titleWithSearch')
            Китобхои охирин
            @slot('search_text')
                Номи китоб
            @endslot
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
                                    <button type="button"
                                            class="btn btn-outline-success btn-block shadow-sm my-3"
                                            href="{{route("docs.show", $doc->getId())}}"
                                    >
                                        Кушоед
                                    </button>
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
                {{ $docs->links() }}
            </div>
        </div>
    </div>
@endsection
