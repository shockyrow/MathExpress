@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Китоби нав
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="bookTitleInput">Номи китоб</label>
                        <input type="text" class="form-control" id="bookTitleInput" placeholder="Номи китоб">
                    </div>
                    <div class="form-group">
                        <label for="bookAuthorInput">Нависанда</label>
                        <input type="text" class="form-control" id="bookAuthorInput" placeholder="Нависанда">
                    </div>
                    <div class="form-group">
                        <label for="bookDescriptionInput">Дар бораи китоб</label>
                        <textarea class="form-control" id="bookDescriptionInput" rows="5"></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="bookFile">
                        <label class="custom-file-label" for="bookFile">Китобро аз компутер интихоб кунед</label>
                    </div>
                    <button class="btn btn-primary align-self-end my-3" type="submit">Боргузорӣ</button>
                </form>
            </div>
        </div>
    </div>
@endsection
