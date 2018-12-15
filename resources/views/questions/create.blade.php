@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h2>Ask Question</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="questionTitleInput">Title</label>
                        <input type="text" class="form-control" id="questionTitleInput" placeholder="What is your question?">
                    </div>
                    <div class="form-group">
                        <label for="questionDescriptionInput">Description</label>
                        <textarea class="form-control" id="questionDescriptionInput" rows="5" placeholder="Give more description about question"></textarea>
                    </div>

                    <div class="mb-5">
                        <h4>Above input should be here.</h4>
                    </div>

                    <div class="form-group">
                        <label for="questionTagsInput">Tags</label>
                        <input type="text" class="form-control" id="questionTagsInput" placeholder="e.g. (geometry, graph)">
                    </div>
                    <button
                     type="button" 
                     class="btn btn-primary mt-5"
                     href="{{ route('questions.create') }}">
                         Post Your Question
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
