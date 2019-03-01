@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Саволи нав
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="questionTitleInput">Мавзуъи савол</label>
                        <input type="text" class="form-control" id="questionTitleInput" placeholder="Саволи шумо чист?">
                    </div>
                    <div class="form-group">
                        <label for="questionDescriptionInput">Маълумот</label>
                        <textarea class="form-control" id="questionDescriptionInput" rows="5" placeholder="Бисёртар маълумот дихед"></textarea>
                    </div>

                    <div class="mb-5">
                        <h4>Above input should be here.</h4>
                    </div>

                    <div class="form-group">
                        <label for="questionTagsInput">Тагхо</label>
                        <input type="text" class="form-control" id="questionTagsInput" placeholder="масалан (гиометриа, граф)">
                    </div>
                    <a
                     class="btn btn-success mt-5"
                     href="{{ route('questions.list') }}">
                         Саволро боргузоред.
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
