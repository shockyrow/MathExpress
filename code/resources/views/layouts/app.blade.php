<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1"
        >

        <!-- CSRF Token -->
        <meta name="csrf-token"
              content="{{ csrf_token() }}"
        >

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"
                defer
        ></script>

        <!-- Fonts -->
        <link rel="dns-prefetch"
              href="//fonts.gstatic.com"
        >
        <link href="https://fonts.googleapis.com/css?family=Nunito"
              rel="stylesheet"
              type="text/css"
        >

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}"
              rel="stylesheet"
        >
        <link href="{{ asset('css/floating-button.css') }}"
              rel="stylesheet"
        >
        <link href="{{ asset('css/style.css') }}"
              rel="stylesheet"
        >
    </head>
    <body>
        <div id="app"
             class="container"
        >
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow rounded-bottom border-top-0 sticky-top">
                <a class="navbar-brand"
                   href="{{ url('/') }}"
                >
                    <img src="{{asset('img/logo-text.png')}}"
                         height="30"
                         class="d-inline-block align-top"
                         alt="Logo"
                    />
                </a>
                <button class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse"
                     id="navbarSupportedContent"
                >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav active mr-auto">
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ url('/') }}"
                            >
                                {{ __('Асоси') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('terms.index') }}"
                            >
                                {{ __('Махфум') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('modules.index') }}"
                            >
                                {{ __('Модулхо') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('docs.index') }}"
                            >
                                {{ __('Маводхо') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('questions.index') }}"
                            >
                                {{ __('Саволу Чавоб') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('home') }}"
                            >
                                {{ __('Тамос') }}
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{ route('login') }}"
                                >
                                    {{ __('Даромад') }}
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ route('register') }}"
                                    >{{ __('Бакайдгири') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"
                                   class="nav-link dropdown-toggle"
                                   href="#"
                                   role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   v-pre
                                >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right"
                                     aria-labelledby="navbarDropdown"
                                >
                                    <a class="dropdown-item"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    >
                                        {{ __('Баромад') }}
                                    </a>

                                    <form id="logout-form"
                                          action="{{ route('logout') }}"
                                          method="POST"
                                          style="display: none;"
                                    >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>

            <footer>
              <div class="row">
                  <div class="col-md-12">
                      <div class="footer-copyright text-center">
                          <p>&copy;<script>document.write(new Date().getFullYear());</script> Ҳамаи ҳуқуқҳо ҳифз карда шудааст.</p>
                      </div>
                  </div>
              </div>
            </footer>
        </div>
    </body>
</html>
