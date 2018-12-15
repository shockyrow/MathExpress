@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h2>Recent Books</h2>
            </div>
            <div class="col  d-flex justify-content-end">
                <a
                 class="btn btn-primary"
                 href="{{ route('docs.create') }}">
                     Upload New Book
                </a>
            </div>
        </div>
        <div class="row justify-content-left">
            @for($i = 0; $i < 15; $i++)
                <div class="col-12 col-md-6">
                    <div class="p-0 card shadow mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <img src="{{ asset('img/book-thumb-1.jpg') }}"
                                         class="rounded shadow-sm w-100"
                                    />
                                    <button type="button"
                                            class="btn btn-outline-primary btn-block shadow-sm my-3"
                                            data-toggle="modal"
                                            data-target="#bookView"
                                    >
                                        Read
                                    </button>
                                </div>
                                <div class="col">
                                    <h3>
                                        Force of Nature
                                    </h3>
                                    <h4>
                                        <small>by</small>
                                        Muso Khon
                                    </h4>
                                    <hr>
                                    <p class="text-justify">
                                        From Pete Souza, the #1 New York Times bestselling author of Obama: An Intimate
                                        Portrait, comes a potent commentary on the Presidency--and our country.
                                        As Chief Official White House Photographer, Pete Souza spent more time alongside
                                        President Barack Obama than almost anyone else. His years photographing the
                                        President gave him an intimate behind-the-scenes view of the unique gravity of
                                        the Office of the Presidency--and the tremendous responsibility that comes with
                                        it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="modal fade"
         id="bookView"
         tabindex="-1"
         role="dialog"
         aria-labelledby="bookViewLabel"
         aria-hidden="true"
    >
        <div class="container">

            <div class="modal-dialog modal-dialog-centered"
                 role="document"
                 style="max-width: initial !important;"
            >
                <div class="modal-content">
                    <div class="modal-header p-2 px-3">
                        <h5 class="modal-title"
                            id="bookViewLabel"
                        >
                            Book Info
                        </h5>
                        <button type="button"
                                class="ml-auto btn btn-light btn-sm h-100 border shadow-sm"
                                data-dismiss="modal"
                                aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="container justify-content-center">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 my-2">
                                    <img src="{{ asset('img/book-thumb-1.jpg') }}"
                                         class="w-100 rounded shadow-sm"
                                    />
                                </div>
                                <div class="col my-2">
                                    <h3>
                                        Force of Nature
                                    </h3>
                                    <h4>
                                        <small>by</small>
                                        Muso Khon
                                    </h4>
                                    <hr>
                                    <p class="text-justify">
                                        From Pete Souza, the #1 New York Times bestselling author of Obama: An Intimate
                                        Portrait, comes a potent commentary on the Presidency--and our country.
                                        As Chief Official White House Photographer, Pete Souza spent more time alongside
                                        President Barack Obama than almost anyone else. His years photographing the
                                        President gave him an intimate behind-the-scenes view of the unique gravity of
                                        the Office of the Presidency--and the tremendous responsibility that comes with
                                        it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-primary"
                        >
                            Download
                        </button>
                        <button type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
