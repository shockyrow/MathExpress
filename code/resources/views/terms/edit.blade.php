@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Ислохи махфум
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('terms.update', $term->getId())}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="termTitleInput">Номи махфум</label>
                        <input type="text" class="form-control" id="termTitleInput" name="title" placeholder="Номи махфум" value="{{$term->getTitle()}}">
                    </div>
                    <div class="form-group">
                        <label for="termDescriptionInput">Маълумоти зиёдтар</label>
                        <textarea class="form-control" id="termDescriptionInput" name="body" rows="5" placeholder="Маълумоти зиёдтар оиди махфум">{{$term->getBody()}}</textarea>
                    </div>
                    <button class="btn btn-primary align-self-end my-3" type="submit">Ислохкуни</button>
                </form>
            </div>
        </div>
    </div>
@endsection