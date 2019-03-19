@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="row justify-content-center w-100">
                <div class="col-12">
                    <div class="card shadow mb-3">
                        <div class="card-header d-flex align-items-center">
                            <div class="mr-auto font-weight-bold">
                                {{ $module->getTitle() }}
                            </div>
                            <a href="{{route("modules.edit", $module->getId())}}">
                                <i class="pr-4 fa fa-pencil-alt"></i>
                            </a>
                            <a href="#">
                                <i class="pr-2 fa fa-trash"></i>
                            </a>
                        </div>

                        <div class="card-body text-justify">

                            <p>
                                {{ \Illuminate\Mail\Markdown::parse($module->getDescription()) }}
                            </p>

                            <div class="d-flex justify-content-around my-5">
                                <button type="button"
                                        class="btn btn-success"
                                        data-toggle="modal"
                                        data-target="#presentationModal"
                                >
                                    Пресентасия
                                </button>

                                <button type="button"
                                        class="btn btn-success"
                                        data-toggle="modal"
                                        data-target="#videoModal"
                                >
                                    Видео
                                </button>

                                <button type="button"
                                        class="btn btn-success"
                                        href="{{ route('questions.index') }}"
                                >
                                    Саволхои алокаманд
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

                        <div class="card-footer">
                            <div>
                                <strong>Сана:</strong>
                                {{ \Carbon\Carbon::parse($module->created_at)->diffForHumans() }}
                            </div>
                            <div>
                                <strong>Профессор:</strong>
                                {{$module->getProfessor()}}
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
