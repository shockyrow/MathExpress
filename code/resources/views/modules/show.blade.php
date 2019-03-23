@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-12">
                <div class="card shadow bg-light mb-3">
                    <div class="card-body d-flex align-items-center">
                        <div class="mr-auto font-weight-bold">
                            {{ $module->getTitle() }}
                        </div>

                        @auth
                            @if (Auth::user()->hasAnyRole([\App\Role::ROLE_ADMIN, \App\Role::ROLE_TEACHER]))
                                <a href="{{route("modules.edit", $module->getId())}}">
                                    <button class="btn mx-3 text-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                </a>
                                <button type="submit" form="deleteModule{{ $module->getId() }}" class="btn text-danger">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <form id="deleteModule{{ $module->getId() }}" action="{{ route($module->getTable() . '.destroy', $module->getId()) }}" method="post" class="d-none">
                                    @csrf
                                    @method('delete')
                                </form>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>

            <div class="col-11">
                <div class="card shadow-sm mb-3">
                    <div class="card-body text-justify">
                        {{ \Illuminate\Mail\Markdown::parse($module->getDescription()) }}

                        <div class="d-flex justify-content-around flex-wrap my-3">
                            @if ($module->getfileName())
                                <a href="{{ route('module.download', $module->getId()) }}" class="btn btn-success my-1">
                                    Боргирии мавод
                                </a>
                            @endif

                            <a href="{{ route('questions.index', ['tag' => $module->tags->implode('name', ',')]) }}" class="btn btn-success my-1">
                                Саволҳои алоқаманд
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card bg-light shadow">
                    <div class="card-body">
                        <div>
                            <strong>Сана:</strong>
                            {{ \Carbon\Carbon::parse($module->created_at)->diffForHumans() }}
                        </div>
                        <div>
                            <strong>Профессор:</strong>
                            {{$module->user->getName()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
