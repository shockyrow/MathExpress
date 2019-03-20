@extends('layouts.app')

@section('content')
    <div>
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

        <button class="floating-button floating-button-br rounded-circle btn btn-secondary shadow">
            <i class="fa fa-plus"></i>
        </button>
    </div>
@endsection
