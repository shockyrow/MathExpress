@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Модули нав
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('modules.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Сарлавҳа</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Сарлавҳаи модул">
                    </div>

                    <div class="form-group">
                        <label for="description">Маълумот</label>
                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Контенти модул"></textarea>
                    </div>
                    <div class="custom-file mt-3">
                        <input type="file" id="moduleFile" name="file">
                    </div>

                    <div class="form-group">
                        <label for="moduleTagsInput">Тагҳо</label>
                        <input type="text" class="form-control" id="moduleTagsInput" name="tags" placeholder="масалан (маҷмӯъ)">
                    </div>

                    <button class="btn btn-success align-self-end my-3" type="submit">
                        Боргузоред
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
