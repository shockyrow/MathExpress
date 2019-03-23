@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Ислоҳи савол
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('questions.update', $question->getId()) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="answer_id" value="{{ $question->getAnswerId() }}">

                    <div class="form-group">
                        <label for="questionTitleInput">Сарлавҳаи савол</label>
                        <input type="text" class="form-control" id="questionTitleInput" name="title" value="{{$question->getTitle()}}"
                               placeholder="Саволи шумо чист?">
                    </div>

                    <div class="form-group">
                        <label for="questionDescriptionInput">Маълумот</label>
                        <textarea class="form-control" id="questionDescriptionInput" rows="5" name="description"
                                  placeholder="Бисёртар маълумот дихед">{{$question->getDescription()}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="questionTagsInput">Тагҳо</label>
                        <input type="text" class="form-control" id="questionTagsInput" name="tags" value="{{ $question->tags->implode('name', ', ') }}"
                               placeholder="масалан (маҷмӯъ)">
                    </div>

                    <button
                            class="btn btn-success mt-5" type="submit">
                        Ислоҳ
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
