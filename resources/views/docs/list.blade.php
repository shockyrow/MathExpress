@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @for($i = 0; $i < 5; $i++)
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="p-0 card shadow mb-3">
                        <div class="card-body">
                            Taylor Series
                        </div>
                        <div class="card-footer">
                            <div>
                                <p>
                                    <strong>Definition:</strong>
                                    A Taylor series is a series expansion of a function about a point. A one-dimensional Taylor series is an expansion of a real function f(x) about a point x=a is given by
                                </p>
                            </div>
                            <img src="{{ asset('img/math-example-3.png') }}"
                            />
                            <p>
                                A Taylor series is a series expansion of a function about a point. A one-dimensional Taylor series is an expansion of a real function f(x) about a point x=a is given by
                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
