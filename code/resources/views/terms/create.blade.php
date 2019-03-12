@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Махфуми нав
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('terms.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="termTitleInput">Номи махфум</label>
                        <input type="text" class="form-control" id="termTitleInput" name="title" placeholder="Номи махфум">
                    </div>
                    <div class="form-group">
                        <label for="termDescriptionInput">Дар бораи китоб</label>
                        <textarea class="form-control" id="termDescriptionInput" name="description" rows="5"></textarea>
                    </div>
                    <button class="btn btn-primary align-self-end my-3" type="submit">Боргузорӣ</button>
                </form>
            </div>
        </div>
    </div>
@endsection