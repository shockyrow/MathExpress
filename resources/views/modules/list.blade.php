@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @for($i = 0; $i < 15; $i++)
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="{{ route('modules.show', 1) }}" class="btn p-0 card shadow mb-3 text-justify">
                        <img src="{{ asset('img/module-example.jpg') }}"
                             class="card-img-top"
                        />

                        <div class="card-body">
                            <h5 class="card-title">
                                Module #{{ $i+1 }}: Title goes here!
                            </h5>
                            <h6 class="card-subtitle">
                                by Ibrokhim Shokirov
                            </h6>
                        </div>

                        <div class="card-footer small text-muted">
                            <div>
                                <strong>Date:</strong>
                                23 Jan
                            </div>
                            <div>
                                <strong>Lecturer:</strong>
                                Ibrokhim Shokirov
                            </div>
                            <div>
                                <strong>Extras:</strong>
                                video, audio, presentation
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
@endsection
