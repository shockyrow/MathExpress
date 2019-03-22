@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Ислохи савол
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('questions.update', $question->getId()) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="answer_id" value="{{ $question->getAnswerId() }}">

                    <div class="form-group">
                        <label for="questionTitleInput">Мавзуъи савол</label>
                        <input type="text" class="form-control" id="questionTitleInput" name="title" value="{{$question->getTitle()}}"
                               placeholder="Саволи шумо чист?">
                    </div>
                    <div class="form-group">
                        <label for="questionDescriptionInput">Маълумот</label>
                        <textarea class="form-control" id="questionDescriptionInput" rows="5" name="description"
                                  placeholder="Бисёртар маълумот дихед">{{$question->getDescription()}}</textarea>
                    </div>

                    <div class="mb-5">
                        <h4>Above input should be here.</h4>
                    </div>

                    <div class="form-group">
                        <label for="questionTagsInput">Тагхо</label>
                        <input type="text" class="form-control" id="questionTagsInput" name="tags" value="{{ $question->tags->implode('name', ', ') }}"
                               placeholder="масалан (гиометриа, граф)">
                    </div>
                    <button
                            class="btn btn-success mt-5" type="submit">
                        Ислохкуни
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
