@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            @for($i = 0; $i < 15; $i++)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="p-0 card shadow mb-3"
                    >
                        <img src="{{ asset('img/book-thumb-1.jpg') }}"
                             class="card-img-top"
                        />
                        <button type="button"
                                class="btn btn-primary my-2 mx-2"
                                data-toggle="modal"
                                data-target="#bookView"
                        >
                            Read
                        </button>
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
        <div class="container h-100 d-flex align-items-center">

            <div class="modal-dialog mx-0 w-100"
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
                                <img src="{{ asset('img/book-thumb-1.jpg') }}"
                                    class="mx-2 my-2" 
                                />
                                <div class="col my-2">
                                    <h3>
                                        Force of Nature
                                    </h3>
                                    <h5>
                                        <small>by</small> Muso Khon
                                    </h5>
                                    <hr>
                                    <p>
                                        From Pete Souza, the #1 New York Times bestselling author of Obama: An Intimate Portrait, comes a potent commentary on the Presidency--and our country.

                                        As Chief Official White House Photographer, Pete Souza spent more time alongside President Barack Obama than almost anyone else. His years photographing the President gave him an intimate behind-the-scenes view of the unique gravity of the Office of the Presidency--and the tremendous responsibility that comes with it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Download</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
