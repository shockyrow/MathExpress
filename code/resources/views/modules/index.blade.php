@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.titleWithSearch', ['search_text' => 'Номи Модул', 'search_url' => route('modules.index')])
            Хамаи Модулхо
        @endcomponent
        <div class="row justify-content-center">
            @foreach($modules as $module)
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-module-item">
                        <div class="module-thumb">
                            <a href="{{ route('modules.show', $module->getId()) }}"><img src="{{ Storage::url($module->getThumbnail()) }}"
                                                                           alt=""></a>
                        </div>
                        <div class="mx-4 my-4">
                            <h4><strong>{{$module -> getTitle()}}</strong></h4>
                            <div class="d-flex my-2">
                                <p>{{ \Carbon\Carbon::parse($module->created_at)->diffForHumans() }}</p>
                                <p class="mx-3">{{$module -> getProfessor()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            <div class="d-flex justify-content-center w-100">
                {{ $modules->appends($_GET)->links() }}
            </div>
    </div>
@endsection
