@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h2>Upload new book</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="bookTitleInput">Book title</label>
                        <input type="text" class="form-control" id="bookTitleInput" placeholder="Book title">
                    </div>
                    <div class="form-group">
                        <label for="bookAuthorInput">Author</label>
                        <input type="text" class="form-control" id="bookAuthorInput" placeholder="Author">
                    </div>
                    <div class="form-group">
                        <label for="bookDescriptionInput">Book Description</label>
                        <textarea class="form-control" id="bookDescriptionInput" rows="5"></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="bookFile">
                        <label class="custom-file-label" for="bookFile">Choose file</label>
                    </div>
                    <button class="btn btn-primary align-self-end my-3" type="submit">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
