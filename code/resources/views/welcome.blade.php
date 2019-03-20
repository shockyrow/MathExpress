@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="card shadow">
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
                                    Ягон тект барои тариф кардани портал. Ягон тект барои тариф кардани портал. Ягон тект барои
                                    тариф кардани портал.
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
                                    Дасти ери аз профессорони забарасти донишкадаи ДДТХ дастраст кунед.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="d-flex justify-content-center pb-3">
                                    <div class="d-flex align-items-center justify-content-center feature-icon p-3 app-primary-bg text-light rounded shadow-sm position-relative">
                                        <i class="fa fa-rocket fa-2x"></i>
                                    </div>
                                </div>
                                <h4 class="text-center">
                                    {{ __('Дастрас') }}
                                </h4>
                                <hr/>
                                <div>
                                    Портали мазкурро шумо метавонед хамавак дарстрас кунед ва дониши худро сайкал дихед.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center text-center mt-5">
            <div class="col-md-10 col-lg-8 h2">
                Портали мо аз тарафи <strong>10,000+</strong> донушчуен истифода бурда мешабад
            </div>
            <p class="col-md-10 col-lg-8 h6">
                Портали мо аз тарафи 10,000+ донушчуен истифода бурда мешабад. Портали мо аз тарафи 10,000+ донушчуен
                истифода бурда мешабад. Портали мо аз тарафи 10,000+ донушчуен истифода бурда мешабад. Портали мо аз
                тарафи 10,000+ донушчуен истифода бурда мешабад
            </p>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-10">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row features text-center">
                            <div class="col-md-6 col-lg-3">
                                <h1>
                                    {{ \App\Role::where('name', \App\Role::ROLE_STUDENT)->first()->users()->count() }}
                                </h1>
                                <h5>Донишчу</h5>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <h1>
                                    {{ \App\Role::where('name', \App\Role::ROLE_TEACHER)->first()->users()->count() }}
                                </h1>
                                <h5>Омузгор</h5>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <h1>
                                    {{ \App\Module::count() }}
                                </h1>
                                <h5>Лексия</h5>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <h1>
                                    {{ \App\Doc::count() }}
                                </h1>
                                <h5>Маводхои интерактиви</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center text-justify mt-5">
            <h2 class="col-10 text-center mb-4">
                Истифодабарандахои Мо Чи Мегуянд?
            </h2>
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <i class="fa fa-quote-right fa-2x app-primary-fg"></i>
                        </div>
                        <p>
                            “Ман ин порталхо хеле дуст медорам. Аз ин портал ман метавонам маълумотхоро бо забони точики дастрас
                            кунам ва дониши худро муккаммал дихам.”
                        </p>
                        <div class="blockquote-footer">
                            Сафарзода Сафар
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
