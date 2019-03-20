<div class="carousel-header app-primary-bg py-3 mb-3">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg bg-light rounded shadow">
            <a class="navbar-brand" href="{{ route('welcome') }}">
                MathExpress
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('terms.index') }}">
                            {{ __('Махфум') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('modules.index') }}">
                            {{ __('Модулхо') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('docs.index') }}">
                            {{ __('Маводхо') }}
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        @if (isset($showCarousel) && $showCarousel)
            <div id="mainCarouselControls" class="carousel slide carousel-fade my-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainCarouselControls" data-slide-to="0" class="active"></li>
                    <li data-target="#mainCarouselControls" data-slide-to="1"></li>
                    <li data-target="#mainCarouselControls" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner rounded shadow">
                    <div class="carousel-item carousel-item-overlay active">
                        <img src="{{ asset('img/slider/slide_1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="font-weight-bold">First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>

                    <div class="carousel-item carousel-item-overlay">
                        <img src="{{ asset('img/slider/slide_2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="font-weight-bold">Second slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>

                    <div class="carousel-item carousel-item-overlay">
                        <img src="{{ asset('img/slider/slide_3.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="font-weight-bold">Third slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#mainCarouselControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#mainCarouselControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        @endif
    </div>
</div>