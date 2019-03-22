@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Саволи нав
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('questions.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="questionTitleInput">Мавзуъи савол</label>
                        <input type="text" class="form-control" id="questionTitleInput" name="title" placeholder="Саволи шумо чист?">
                    </div>

                    <div class="form-group">
                        <label for="questionDescriptionInput">Маълумот</label>
                        <textarea class="form-control" id="questionDescriptionInput" rows="5" name="description" placeholder="Бисёртар маълумот дихед"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="questionTagsInput">Тагхо</label>
                        <input type="text" class="form-control" id="questionTagsInput" name="tags" placeholder="масалан (гиометриа, граф)">
                    </div>

                    <button class="btn btn-success mt-5" type="submit">
                        Саволро боргузоред.
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
