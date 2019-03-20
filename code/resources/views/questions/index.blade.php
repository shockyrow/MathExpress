@extends('layouts.app')

@section('content')
    @component('layouts.components.search', ['search_text' => 'Номи савол'])
    @endcomponent

    @component('layouts.components.list', ['data' => $questions])
        @foreach($questions as $question)
            @component('layouts.components.question_item', ['question' => $question])
            @endcomponent
        @endforeach
    @endcomponent
@endsection
