@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 p-0 card shadow mb-3 text-justify">
                <div class="card-header d-flex align-items-center">
                    <div class="mr-auto">
                        {{ $question->getTitle() }}
                        <div class="small text-muted">
                            {{ $question->user->getName() }}
                        </div>
                    </div>
                    <a href="{{ route("questions.edit", $question->getId()) }}">
                        <i class="pr-4 fa fa-pencil-alt"></i>
                    </a>
                    <a href="#">
                        <i class="pr-2 fa fa-trash"></i>
                    </a>
                </div>
                <div class="card-body">
                    {{ \Illuminate\Mail\Markdown::parse($question->getDescription()) }}
                </div>
            </div>
            <div class="col-12 p-0">
                <hr>
                <div class="text-right">{{$question->answers->count()}} чавоб</div>
                @foreach($question->answers as $answer)
                    <div class="p-0 card shadow mb-3 text-justify my-3 {{ $answer->getId() === $question->getAnswerId() ? 'border border-success' : '' }}">
                        <div class="card-body">
                            {{ \Illuminate\Mail\Markdown::parse($answer->getText()) }}
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <div class="mr-auto text-muted">
                                {{ $answer->user->getName() }}
                            </div>
                            <a href="#">
                                <i class="pr-4 fa fa-pencil-alt"></i>
                            </a>
                            <a href="#">
                                <i class="pr-2 fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            @auth
                <div class="col-12 p-0">
                    <hr>
                    <form action="{{ route('answers.store') }}" method="post">
                        @csrf
                        @method('post')

                        <input type="hidden" name="user_id" value="{{ 1 }}"/>
                        <input type="hidden" name="question_id" value="{{ $question->getId() }}"/>

                        <div class="form-group">
                            <label for="answerInput">Чавоби шумо</label>
                            <textarea class="form-control" id="answerInput" rows="5" placeholder="Чавобатонро дар инчо набисед." name="text"></textarea>
                        </div>
                        <button
                                type="submit"
                                class="btn btn-success mt-5"
                                href="{{ route('questions.create') }}">
                            Чавобро боргузоред.
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
@endsection
