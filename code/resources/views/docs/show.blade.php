@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Маълумоти мавод ва боргири
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
                                <div class="row my-3">
                                    <div class="col-9">
                                        <h2>
                                            {{ $doc->getTitle() }}
                                        </h2>

                                    </div>
                                    <div class="col-3">
                                        <a href="{{route("doc.download", $doc->getId())}}">
                                            <i class="text-success pr-4 fa fa-download"></i>
                                        </a>
                                        @auth
                                            @if (Auth::user()->hasAnyRole([\App\Role::ROLE_ADMIN, \App\Role::ROLE_TEACHER]))
                                                <a href="{{route("docs.edit", $doc->getId())}}">
                                                    <i class="pr-4 fa fa-pencil-alt"></i>
                                                </a>
                                                <button type="submit" form="deleteDoc{{ $doc->getId() }}" class="btn btn-sm text-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                                <form id="deleteDoc{{ $doc->getId() }}" action="{{ route($doc->getTable() . '.destroy', $doc->getId()) }}" method="post" class="d-none">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            @endif
                                        @endauth
                                    </div>
                                </div>

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
        </div>
    </div>
@endsection
