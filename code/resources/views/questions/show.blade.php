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
                <label><h3>{{$question->getAnswerCount()}} чавоб</h3></label>
                <hr>
                <div>
                    <p>
                        Here should be answers related linked to this question.
                    </p>
                </div>
            </div>
            <div class="col-12 mt-5">
                <form>
                    <div class="form-group">
                        <label for="answerInput"><h3>Чавоби шумо</h3></label>
                        <textarea class="form-control" id="answerInput" rows="5" placeholder="Чавобатонро дар инчо набисед."></textarea>
                    </div>

                    <div class="mb-5">
                        <h4>Above input should be here.</h4>
                    </div>
                    <button
                     type="button" 
                     class="btn btn-success mt-5"
                     href="{{ route('questions.create') }}">
                         Чавобро боргузоред.
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
