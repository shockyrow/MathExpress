@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @for($i = 0; $i < 15; $i++)
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="{{ route('modules.show', 1) }}" class="btn p-0 card shadow mb-3">
                        <img src="{{ asset('img/module-example.jpg') }}"
                             class="w-100 rounded-top"
                        />

                        <div class="card-body">
                            Module #{{ $i+1 }}: Title goes here!
                        </div>

                        <div class="card-footer small text-muted">
                            <div>
                                <strong>Lecturer:</strong>
                                Ibrokhim Shokirov
                            </div>
                            <div>
                                <strong>Date:</strong>
                                23 Jan
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
