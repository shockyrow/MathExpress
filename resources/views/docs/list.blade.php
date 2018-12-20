@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.titleWithSearch')
            Китобхои охирин
            @slot('search_text')
                Номи китоб
            @endslot
        @endcomponent
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
                                        Кушоед
                                    </button>
                                </div>
                                <div class="col">
                                    <h2>
                                        Точикон
                                    </h2>
                                    <h4>
                                        <small>Бобочон Гафуров</small>
                                    </h4>
                                    <hr>
                                    <p class="text-justify">
                                        Агар кас гузаштаи аҷдоди худро надонад, инсони комил нест!
                                        Ин хитобаи сода, вале дар айни замон ҷиддии бузургони илму адаби мо аз қаъри асрҳо ба гўш мерасад ва ҳушдор медиҳад, ки аз таърихи миллату сарзамин, расму русум ва дину оини худ мудом воқиф бошем. Воқеан, таърихро хотираи <a href="">( Бисёртар )</a>
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
                            Маълумоти китоб
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
                                    <h2>
                                        Точикон
                                    </h2>
                                    <h4>
                                        <small>Бобочон Гафуров</small>
                                    </h4>
                                    <hr>
                                    <p class="text-justify">
                                        Пас ҳар фард бе омўзиши таърихи кишвари худ аслу насаб ва маърифати бумиву зотиашро пойдору бегазанд нигоҳ дошта наметавонад, аз решаи хеш дур ё канда шуда, ба вартаи гумномӣ ё фано қадам мениҳад ва, ба таъбири имрўзиён, «манқурт» мешавад. Пас ҳар фард бе омўзиши таърихи кишвари худ аслу насаб ва маърифати бумиву зотиашро пойдору бегазанд нигоҳ дошта наметавонад, аз решаи хеш дур ё канда шуда, ба вартаи гумномӣ ё фано қадам мениҳад ва, ба таъбири имрўзиён, «манқурт» мешавад. Пас ҳар фард бе омўзиши таърихи кишвари худ аслу насаб ва маърифати бумиву зотиашро пойдору бегазанд нигоҳ дошта наметавонад, аз решаи хеш дур ё канда шуда, ба вартаи гумномӣ ё фано қадам мениҳад ва, ба таъбири имрўзиён, «манқурт» мешавад. Пас ҳар фард бе омўзиши таърихи кишвари худ аслу насаб ва маърифати бумиву зотиашро пойдору бегазанд нигоҳ дошта наметавонад, аз решаи хеш дур ё канда шуда, ба вартаи гумномӣ ё фано қадам мениҳад ва, ба таъбири имрўзиён, «манқурт» мешавад.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-primary"
                        >
                            Боргири
                        </button>
                        <button type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                        >
                            Пушидан
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
