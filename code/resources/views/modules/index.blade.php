@extends('layouts.app')

@section('content')
    @component('layouts.components.search', ['search_text' => 'Номи Модул'])
        Хамаи Модулхо
    @endcomponent

    @component('layouts.components.list', ['data' => $modules, 'createRouteName' => 'modules.create'])
        @forelse($modules as $module)
            @component('layouts.components.module_item', ['module' => $module])
            @endcomponent
        @empty
            @component('layouts.components.empty')
            @endcomponent
        @endforelse
    @endcomponent
@endsection
