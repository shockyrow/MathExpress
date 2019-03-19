@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 p-0 card shadow mb-3 text-justify">
                <div class="card-header d-flex align-items-center">
                    <div class="mr-auto">
                        {{ $question->getTitle() }}
                        <div class="small text-muted">
                            Али Валиев
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
            <div class="col-12 my-2">
                <label><h2>{{$question->answers->count()}} чавоб</h2></label>
                @foreach($question->answers as $answer)
                    <div class="p-0 card shadow mb-3 text-justify my-3 {{ $answer->getId() === $question->getAnswerId() ? 'border border-success' : '' }}">
                        <div class="d-flex justify-content-end pr-4 mt-3 w-100">
                            <a href="#">
                                <i class="pr-4 fa fa-pencil-alt"></i>
                            </a>
                            <a href="#">
                                <i class="pr-2 fa fa-trash"></i>
                            </a>
                        </div>
                        <div class="p-4">
                            <p class="pr-2 text-dark font-weight-bold">
                                {{$answer->getText()}}
                            </p>
                        </div>
                        <div class="d-flex justify-content-end px-4 w-100">
                            <p class="pr-2 text-dark font-weight-bold">
                                Али Валиев
                            </p>
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
                        <label for="answerInput"><h2>Чавоби шумо</h2></label>
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
