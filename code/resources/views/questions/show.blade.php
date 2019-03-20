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
                            @if (Auth::id() === $question->user->getId() || Auth::user()->authorizeRoles([\App\Role::ROLE_ADMIN]))
                                <a href="{{route("questions.edit", $question->getId())}}">
                                    <i class="pr-4 fa fa-pencil-alt"></i>
                                </a>
                                <a href="#" class="text-danger">
                                    <i class="pr-2 fa fa-trash"></i>
                                </a>
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
                                    @if (Auth::id() === $answer->user->getId() || Auth::user()->authorizeRoles([\App\Role::ROLE_ADMIN]))
                                        <a href="#" class="btn btn-sm text-danger">
                                            <i class="pr-2 fa fa-trash"></i>
                                        </a>
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
    </div>
@endsection
