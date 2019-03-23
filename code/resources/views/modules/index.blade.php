@extends('layouts.app')

@section('content')
    @component('layouts.components.search', ['search_text' => 'Номи Модул'])
        Хамаи Модулхо
    @endcomponent

    @component('layouts.components.list', ['data' => $modules, 'createRouteName' => 'modules.create'])
        @foreach($modules as $module)
            @component('layouts.components.module_item', ['module' => $module])
            @endcomponent
        @endforeach
        @if(sizeof($modules) === 0)
            @component('layouts.components.empty')
            @endcomponent
        @endif
    @endcomponent
@endsection
