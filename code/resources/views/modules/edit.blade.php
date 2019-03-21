@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Ислохи модул
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('modules.update', $module->getId()) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="bookTitleInput">Сарлавхо</label>
                        <input type="text" class="form-control" id="bookTitleInput" name="title" placeholder="Сарлавхои модул" value="{{$module->getTitle()}}">
                    </div>
                    <div class="form-group">
                        <label for="bookDescriptionInput">Маълумот</label>
                        <textarea class="form-control" id="bookDescriptionInput" name="description" rows="5" placeholder="Контенти модул">{{$module->getDescription()}}</textarea>
                    </div>
                    <button class="btn btn-success align-self-end my-3" type="submit">Ислохкуни</button>
                </form>
            </div>
        </div>
    </div>
@endsection
