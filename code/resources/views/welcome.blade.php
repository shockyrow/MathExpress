@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-11 my-3">
                <div class="card bg-light shadow">
                    <div class="card-body">
                        <div class="row features text-justify">
                            <div class="col-md-4">
                                <div class="d-flex justify-content-center pb-3">
                                    <div class="d-flex align-items-center justify-content-center feature-icon p-3 app-primary-bg text-light rounded shadow-sm position-relative">
                                        <i class="fa fa-graduation-cap fa-2x"></i>
                                    </div>
                                </div>
                                <h4 class="text-center">
                                    {{ __('Дониши кафолат') }}
                                </h4>
                                <hr/>
                                <div>
                                    Дар портали шумо бе шакку шубҳа дониши худро такмил медиҳед.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="d-flex justify-content-center pb-3">
                                    <div class="d-flex align-items-center justify-content-center feature-icon p-3 app-primary-bg text-light rounded shadow-sm position-relative">
                                        <i class="fa fa-chalkboard-teacher fa-2x"></i>
                                    </div>
                                </div>
                                <h4 class="text-center">
                                    {{ __('Муаллимони забардаст') }}
                                </h4>
                                <hr/>
                                <div>
                                    Дасти ёри аз профессорони забарасти ДДТХ-ро дастраст мекунед.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="d-flex justify-content-center pb-3">
                                    <div class="d-flex align-items-center justify-content-center feature-icon p-3 app-primary-bg text-light rounded shadow-sm position-relative">
                                        <i class="fa fa-rocket fa-2x"></i>
                                    </div>
                                </div>
                                <h4 class="text-center">
                                    {{ __('Дастрасии осон') }}
                                </h4>
                                <hr/>
                                <div>
                                    Портали мазкурро шумо метавонед ҳамавак дарстрас кунед ва дониши худро сайқал диҳед.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center text-center my-5">
            <div class="col-md-10 col-lg-8 h2 my-3">
                Портали мо аз тарафи <strong>10,000+</strong> донушҷӯён истифода бурда мешабад
            </div>
            <p class="col-md-10 col-lg-8 h6">
                Портали моро ҳам аз ДДДХ ва ҳам аз донишгоҳу донишкадаҳои кишвар истифода мебаранд.
            </p>
        </div>
        <div class="row d-flex justify-content-center my-3">
            <div class="col-11">
                <div class="card bg-light shadow">
                    <div class="card-body">
                        <div class="row features text-center">
                            <div class="col-md-6 col-lg-3">
                                <h1>
                                    {{ \App\Role::where('name', \App\Role::ROLE_STUDENT)->first()->users()->count() }}
                                </h1>
                                <h5>Истифодабар</h5>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <h1>
                                    {{ \App\Role::where('name', \App\Role::ROLE_TEACHER)->first()->users()->count() }}
                                </h1>
                                <h5>Омӯзгор</h5>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <h1>
                                    {{ \App\Module::count() }}
                                </h1>
                                <h5>Модул</h5>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <h1>
                                    {{ \App\Doc::count() }}
                                </h1>
                                <h5>Маводҳо</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center text-justify my-3">
            <h2 class="col-10 text-center my-3">
                Истифодабарандагони мо чи мегӯянд?
            </h2>
            <div class="col-11 my-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <div>
                            <i class="fa fa-quote-right fa-2x app-primary-fg"></i>
                        </div>
                        <p>
                            “Ман ин порталро хеле дӯст медорам. Аз ин портал ман метавонам маълумотҳоро бо забони тоҷикӣ дастрас
                            кунам ва дониши худро муккаммал диҳам.”
                        </p>
                        <div class="blockquote-footer">
                            Мукаюмхонова
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
