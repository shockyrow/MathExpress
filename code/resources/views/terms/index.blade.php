@extends('layouts.app')

@section('content')
    @component('layouts.components.search', ['search_text' => 'Номи Махфум'])
    @endcomponent

    @component('layouts.components.letters')
    @endcomponent

    @component('layouts.components.list', ['data' => $terms])
        @foreach($terms as $term)
            @component('layouts.components.term_item', ['term' => $term])
            @endcomponent
        @endforeach
    @endcomponent
@endsection
