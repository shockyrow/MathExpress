@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h2>Хамаи Модулхо</h2>
            </div>
            <div class="col  d-flex justify-content-end">
                <a
                 class="btn btn-primary"
                 href="{{ route('modules.create') }}">
                     Модули нав
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            @for($i = 0; $i < 15; $i++)
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="{{ route('modules.show', 1) }}" class="btn p-0 card shadow mb-3 text-justify">
                        <img src="{{ asset('img/module-example.jpg') }}"
                             class="card-img-top"
                        />

                        <div class="card-body">
                            <h5 class="card-title">
                                Модули #{{ $i+1 }}: Номи модуле
                            </h5>
                            <h6 class="card-subtitle">
                                Номи мавзуъ
                            </h6>
                        </div>

                        <div class="card-footer small text-muted">
                            <div>
                                <strong>Сана:</strong>
                                23 Янв
                            </div>
                            <div>
                                <strong>Профессор:</strong>
                                Али Валиев
                            </div>
                            <div>
                                <strong>Маводхо:</strong>
                                Видео, аудио, пресентасия.
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
@endsection
