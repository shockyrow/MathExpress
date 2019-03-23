@extends('layouts.app')

@section('content')
    @component('layouts.components.search', ['search_text' => 'Номи Маҳфум'])
    @endcomponent

    @component('layouts.components.letters')
    @endcomponent

    @component('layouts.components.list', ['data' => $terms, 'createRouteName' => 'terms.create'])
        @foreach($terms as $term)
            @component('layouts.components.term_item', ['term' => $term])
            @endcomponent
        @endforeach
        @if(sizeof($terms) === 0)
            @component('layouts.components.empty')
            @endcomponent
        @endif

    @endcomponent
@endsection
