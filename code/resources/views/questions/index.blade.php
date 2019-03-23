@extends('layouts.app')

@section('content')
    @component('layouts.components.search', ['search_text' => 'Номи савол'])
    @endcomponent

    @component('layouts.components.list', ['data' => $questions, 'createRouteName' => 'questions.create'])
        @forelse($questions as $question)
            @component('layouts.components.question_item', ['question' => $question])
            @endcomponent
        @empty
            @component('layouts.components.empty')
            @endcomponent
        @endforelse
    @endcomponent
@endsection
