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
                        <label for="title">Сарлавҳа</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Сарлавҳаи модул" value="{{$module->getTitle()}}">
                    </div>

                    <div class="form-group">
                        <label for="moduleDescriptionInput">Маълумот</label>
                        <textarea class="form-control" id="moduleDescriptionInput" name="description" rows="5" placeholder="Контенти модул">{{$module->getDescription()}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="moduleTagsInput">Тагҳо</label>
                        <input type="text" class="form-control" id="moduleTagsInput" name="tags" value="{{ $module->tags->implode('name', ', ') }}"
                               placeholder="масалан (маҷмӯъ)">
                    </div>

                    <button class="btn btn-success align-self-end my-3" type="submit">
                        Ислоҳ
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
