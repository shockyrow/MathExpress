@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            {{$question->getTitle()}}
        @endcomponent
        <div class="row">
            <div class="col-12">
                <p>
                    {{$question->getDescription()}}
                </p>
                <div class="text-right">
                    <small>Аз тарафи <strong>Али Валиев</strong> пурсида шуд</small>
                </div>
                <hr>
            </div>
            <div class="col-12">
                <label><h3>{{$question->answers->count()}} чавоб</h3></label>
                <hr>
                @foreach($question->answers as $answer)
                    <div class="card my-3 {{ $answer->getId() === $question->getAnswerId() ? 'border border-success' : '' }}">
                        <div class="card-header">
                            {{ $answer->user->name }}
                        </div>
                        <div class="card-body">
                            {{ $answer->getText() }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 mt-5">
                <form action="{{ route('answers.store') }}" method="post">
                    @csrf
                    @method('post')

                    <input type="hidden" name="user_id" value="{{ 1 }}"/>
                    <input type="hidden" name="question_id" value="{{ $question->getId() }}"/>

                    <div class="form-group">
                        <label for="answerInput"><h3>Чавоби шумо</h3></label>
                        <textarea class="form-control" id="answerInput" rows="5" placeholder="Чавобатонро дар инчо набисед." name="text"></textarea>
                    </div>

                    <div class="mb-5">
                        <h4>Above input should be here.</h4>
                    </div>
                    <button
                     type="submit"
                     class="btn btn-success mt-5"
                     href="{{ route('questions.create') }}">
                         Чавобро боргузоред.
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
