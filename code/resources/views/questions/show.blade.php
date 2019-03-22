@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-12">
                <div class="card shadow bg-light mb-3">
                    <div class="card-body d-flex align-items-center">
                        <div class="mr-auto font-weight-bold">
                            {{ $question->getTitle() }}
                            <div class="small">
                                {{ $question->user->getName() }}
                            </div>
                        </div>

                        @auth
                            @if (Auth::id() === $question->user->getId() || Auth::user()->hasAnyRole([\App\Role::ROLE_ADMIN]))
                                <a href="{{route("questions.edit", $question->getId())}}">
                                    <button class="btn mx-3 text-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                </a>
                                <button type="submit" form="deleteQuestion{{ $question->getId() }}" class="btn text-danger">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <form id="deleteQuestion{{ $question->getId() }}" action="{{ route($question->getTable() . '.destroy', $question->getId()) }}" method="post" class="d-none">
                                    @csrf
                                    @method('delete')
                                </form>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card shadow-sm mb-3">
                    <div class="card-body text-justify">
                        {{ \Illuminate\Mail\Markdown::parse($question->getDescription()) }}
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="p-0">
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
                                @auth
                                    @if (Auth::user()->hasAnyRole([\App\Role::ROLE_ADMIN, \App\Role::ROLE_TEACHER]))
                                        <button type="submit" form="correctAnswer{{ $answer->getId() }}" class="btn btn-sm text-success mx-1 ">
                                            <i class="fa fa-check"></i>
                                        </button>

                                        <form id="correctAnswer{{ $answer->getId() }}" action="{{ route('questions.update', $question->getId()) }}" method="post" class="d-none">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="title" value="{{ $question->getTitle() }}">
                                            <input type="hidden" name="description" value="{{ $question->getDescription() }}">
                                            <input type="hidden" name="tags" value="{{ $question->tags->implode('name', ', ') }}">
                                            <input type="hidden" name="answer_id" value="{{ $answer->getId() }}">
                                        </form>
                                    @endif
                                    @if (Auth::id() === $answer->user->getId() || Auth::user()->hasAnyRole([\App\Role::ROLE_ADMIN]))
                                        <button type="submit" form="deleteAnswer{{ $answer->getId() }}" class="btn btn-sm text-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                        <form id="deleteAnswer{{ $answer->getId() }}" action="{{ route($answer->getTable() . '.destroy', $answer->getId()) }}" method="post" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    @endforeach
                </div>
                @auth
                    <div class="p-0">
                        <hr>
                        <form action="{{ route('answers.store') }}" method="post">
                            @csrf
                            @method('post')

                            <input type="hidden" name="user_id" value="{{ Auth::id() }}"/>
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
    </div>
@endsection
