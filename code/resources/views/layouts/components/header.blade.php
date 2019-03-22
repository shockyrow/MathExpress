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
                    <li class="nav-item{{ strpos(Route::getCurrentRoute()->getName(), 'terms') !== false ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('terms.index') }}">
                            {{ __('Махфум') }}
                        </a>
                    </li>

                    <li class="nav-item{{ strpos(Route::getCurrentRoute()->getName(), 'modules') !== false ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('modules.index') }}">
                            {{ __('Модулхо') }}
                        </a>
                    </li>

                    <li class="nav-item{{ strpos(Route::getCurrentRoute()->getName(), 'docs') !== false ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('docs.index') }}">
                            {{ __('Маводхо') }}
                        </a>
                    </li>

                    <li class="nav-item{{ strpos(Route::getCurrentRoute()->getName(), 'questions') !== false ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('questions.index') }}">
                            {{ __('Саволу Чавоб') }}
                        </a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item{{ Route::getCurrentRoute()->getName() === "login" ? " active" : "" }}">
                            <a class="nav-link" href="{{ route('login') }}">
                                {{ __('Даромад') }}
                            </a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Баромад') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        @if (isset($showCarousel) && $showCarousel)
            <div id="mainCarouselControls" class="carousel slide carousel-fade my-5" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item carousel-item-overlay active">
                        <img src="{{ asset('img/slider/welcome_slide_1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item carousel-item-overlay ">
                        <img src="{{ asset('img/slider/welcome_slide_2.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item carousel-item-overlay ">
                        <img src="{{ asset('img/slider/welcome_slide_3.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item carousel-item-overlay ">
                        <img src="{{ asset('img/slider/welcome_slide_4.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item carousel-item-overlay ">
                        <img src="{{ asset('img/slider/welcome_slide_5.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item carousel-item-overlay ">
                        <img src="{{ asset('img/slider/welcome_slide_6.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item carousel-item-overlay ">
                        <img src="{{ asset('img/slider/welcome_slide_7.png') }}" class="d-block w-100" alt="...">
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