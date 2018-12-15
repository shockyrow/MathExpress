@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h2>Top questions</h2>
            </div>
            <div class="col  d-flex justify-content-end">
                <a
                 class="btn btn-primary"
                 href="{{ route('questions.create') }}">
                     Ask Question
                </a>
            </div>
        </div>
        <div class="row justify-content-left">
            @for($i = 0; $i < 15; $i++)
                <div class="col-12">
                    <div class="p-0 card shadow mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center">
                                    @if($i % 3 == 0)
                                        <button type="button" class="btn mr-2 btn-success align-self-center">
                                            <h2>5</h2>
                                            <small>answers</small>
                                        </button>
                                    @elseif ($i % 3 == 1)
                                        <button type="button" class="btn mr-2 btn-primary-outline align-self-center">
                                            <h2>0</h2>
                                            <small>answers</small>
                                        </button>
                                    @else
                                        <button type="button" class="btn mr-2 btn-outline-success align-self-center">
                                            <h2>2</h2>
                                            <small>answers</small>
                                        </button>
                                    @endif
                                    <button type="button" class="btn btn-primary-outline align-self-center">
                                        <h2>15</h2>
                                        <small>views</small>
                                    </button>
                                </div>
                                <div class="col-10 p-3">
                                    <h3>How to solve this problem?</h3>
                                    <div class="row">
                                        <div class="col-8">
                                            <button type="button" class="btn btn-secondary btn-sm">geometry</button>
                                            <button type="button" class="btn btn-secondary btn-sm">graph</button>
                                            <button type="button" class="btn btn-secondary btn-sm">centroid</button>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-right"><small>asked by<strong> Muso Khon</strong></small></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
