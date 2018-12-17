@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h2>Модули нав</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="bookTitleInput">Сарлавхо</label>
                        <input type="text" class="form-control" id="bookTitleInput" placeholder="Сарлавхои модул">
                    </div>
                    <div class="form-group">
                        <label for="bookAuthorInput">Нависанда</label>
                        <input type="text" class="form-control" id="bookAuthorInput" placeholder="Нависанда">
                    </div>
                    <div class="form-group">
                        <label for="bookDescriptionInput">Маълумот</label>
                        <textarea class="form-control" id="bookDescriptionInput" rows="5"></textarea>
                    </div>
                    <button class="btn btn-primary align-self-end my-3" type="submit">Боргузори</button>
                </form>
            </div>
        </div>
    </div>
@endsection
