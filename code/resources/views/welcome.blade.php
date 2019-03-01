@extends('layouts.app')

@section('content')
    <div class="row justify-content-around align-items-stretch">
        <div class="col-12 text-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ asset('img/module-example.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/module-example.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/module-example.jpg') }}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around align-items-stretch row shadow">
        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
            <div class="p-3">
                <div class="d-inline-flex justify-content-center features-box-icon align-items-center">
                    <i class="fa fa-graduation-cap"></i>
                </div>
                <h3 class="box-title"><strong>Дониши кафолат</strong></h3>
                <p>Ягон тект барои тариф кардани портал. Ягон тект барои тариф кардани портал. Ягон тект барои тариф кардани портал.</p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
            <div class="p-3">
                <div class="d-inline-flex justify-content-center features-box-icon align-items-center">
                    <i class="fa fa-rocket"></i>
                </div>
                <h3 class="box-title"><strong>Муаллимони забардаст</strong></h3>
                <p>Ягон тект барои тариф кардани портал. Ягон тект барои тариф кардани портал. Ягон тект барои тариф кардани портал.</p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
            <div class="p-3">
                <div class="d-inline-flex justify-content-center features-box-icon align-items-center">
                    <i class="fas fa-user-tie fa-lg"></i>
                </div>
                <h3 class="box-title"><strong>Дониши кафолат</strong></h3>
                <p>Ягон тект барои тариф кардани портал. Ягон тект барои тариф кардани портал. Ягон тект барои тариф кардани портал.</p>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around align-items-stretch row">
        <div class="col-12 col-md-10 my-3 text-center py-5">
            <h3>
                Портали мо аз тарафи <strong>10,000+</strong> донушчуен истифода бурда мешабад
            </h3>
            <h5>
                Портали мо аз тарафи 10,000+ донушчуен истифода бурда мешабад. Портали мо аз тарафи 10,000+ донушчуен истифода бурда мешабад. Портали мо аз тарафи 10,000+ донушчуен истифода бурда мешабад. Портали мо аз тарафи 10,000+ донушчуен истифода бурда мешабад
            </h5>
        </div>
    </div>

    <div class="d-flex justify-content-around align-items-stretch row">
        <div class="col-12 col-sm-6 col-md-3 my-3 text-center">
            <div class="card bg-dark text-white shadow-sm">
                <div class="card-body">
                    <h2 class="font-weight-bold">
                        20,000
                    </h2>
                    <h4>
                        Донишчуен
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 my-3 text-center">
            <div class="card bg-dark text-white shadow-sm">
                <div class="card-body">
                    <h2 class="font-weight-bold">
                        124
                    </h2>
                    <h4>
                        Омузгорон
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 my-3 text-center">
            <div class="card bg-dark text-white shadow-sm">
                <div class="card-body">
                    <h2 class="font-weight-bold">
                        600
                    </h2>
                    <h4>
                        Лексияхо
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 my-3 text-center">
            <div class="card bg-dark text-white shadow-sm">
                <div class="card-body">
                    <h2 class="font-weight-bold">
                        150
                    </h2>
                    <h4>
                        Маводхо
                    </h4>
                </div>
            </div>
        </div>
    </div>
@endsection
