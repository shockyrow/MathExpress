@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @for($i = 0; $i < 5; $i++)
                <div class="col-3">
                    <div class="p-0 mb-3">
                        <img src="{{ asset('img/book-thumb-1.jpg') }}"
                             class="card-img-top"
                        />
                        <button type="button"
                                class="btn btn-primary my-3"
                                data-toggle="modal"
                                data-target="#download"
                        >
                            Download
                        </button>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
