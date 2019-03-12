@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Маълумот ва боргири
        @endcomponent
        <div class="row justify-content-left">
            <div class="col-12">
                <div class="p-0 card shadow mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <img src="{{ Storage::url($doc->getThumbnail()) }}"
                                     class="rounded shadow-sm w-100"
                                />
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

                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('doc.download', $doc->getId()) }}" style="text-decoration : none">
                                            <button type="button"
                                                    class="btn btn-outline-success btn-block shadow-sm my-3"
                                            >
                                                Боргири
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('docs.edit', $doc->getId()) }}" style="text-decoration : none">
                                            <button type="button"
                                                    class="btn btn-outline-success btn-block shadow-sm my-3"
                                            >
                                                Ислохкуни
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
