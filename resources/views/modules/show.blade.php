@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h2>
                    Модули #1
                    <a
                            class="btn btn-primary float-right"
                            href="{{ route('modules.create') }}">
                        Модули нав
                    </a>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h3 class="mb-0 text-center">Математикаи дискретӣ</h3>
                    </div>

                    <div class="card-body text-justify">
                        <p>
                            Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад. Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад.
                        </p>
                        <div class="text-center">
                            <img src="{{ asset('img/math-example-1.png') }}"
                                 class="rounded my-3 shadow-sm border p-2"
                                 style="max-width: 100%"
                            />
                        </div>
                        <p>
                            Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад. Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад.
                        </p>
                        <div class="text-center">
                            <img src="{{ asset('img/math-example-2.png') }}"
                                 class="rounded my-3 shadow-sm border p-2"
                                 style="max-width: 100%"
                            />
                        </div>
                        <p>
                            Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад. Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад.
                        </p>
                        <p>
                            Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад. Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад.
                        </p>
                        <div class="text-center">
                            <img src="{{ asset('img/math-example-3.png') }}"
                                 class="rounded my-3 shadow-sm border p-2"
                                 style="max-width: 100%"
                            />
                        </div>
                        <p>
                            Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад. Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад.
                        </p>

                        <div class="d-flex justify-content-around my-3">
                            <button type="button"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#presentationModal"
                            >
                                Пресентасия
                            </button>

                            <button type="button"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#videoModal"
                            >
                                Видео
                            </button>
                        </div>

                        <div>
                            <audio class="w-100"
                                   controls
                            >
                                <source src="horse.ogg"
                                        type="audio/ogg"
                                >
                                <source src="horse.mp3"
                                        type="audio/mpeg"
                                >
                                Лутфан Хром истифода баред.
                            </audio>
                        </div>
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
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade"
         id="presentationModal"
         tabindex="-1"
         role="dialog"
         aria-labelledby="presentationModalLabel"
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
                            id="presentationModalLabel"
                        >
                            Пресентасия
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
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                    src="https://onedrive.live.com/embed?cid=A17C0ABDF318AEF5&resid=A17C0ABDF318AEF5%21106&authkey=ADQBLfEFvW3acEU&em=2&wdAr=1.3333333333333333"
                                    allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade"
         id="videoModal"
         tabindex="-1"
         role="dialog"
         aria-labelledby="videoModalLabel"
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
                            id="videoModalLabel"
                        >
                            Video
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
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/092GKXB0WZY"
                                    allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
