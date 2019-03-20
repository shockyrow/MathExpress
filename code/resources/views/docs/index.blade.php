@extends('layouts.app')

@section('content')
    @component('layouts.components.search', ['search_text' => 'Номи китоб'])
        Китобхои охирин
    @endcomponent

    @component('layouts.components.list', ['data' => $docs])
        @foreach($docs as $doc)
            @component('layouts.components.doc_item', ['doc' => $doc])
            @endcomponent
        @endforeach
    @endcomponent
@endsection
