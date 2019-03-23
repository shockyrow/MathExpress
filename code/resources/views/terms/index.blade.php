@extends('layouts.app')

@section('content')
    @component('layouts.components.search', ['search_text' => 'Номи Маҳфум'])
    @endcomponent

    @component('layouts.components.letters')
    @endcomponent

    @component('layouts.components.list', ['data' => $terms, 'createRouteName' => 'terms.create'])
        @forelse($terms as $term)
            @component('layouts.components.term_item', ['term' => $term])
            @endcomponent
        @empty
            @component('layouts.components.empty')
            @endcomponent
        @endforelse
    @endcomponent
@endsection
