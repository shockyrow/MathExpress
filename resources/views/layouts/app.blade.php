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

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}"
              rel="stylesheet"
        >
    </head>
    <body>
        <div id="app"
             class="container"
        >
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel shadow border rounded-bottom border-top-0 sticky-top">
                <a class="navbar-brand"
                   href="{{ url('/') }}"
                >
                    <img src="{{asset('img/logo.png')}}"
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
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('home') }}"
                            >
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('home') }}"
                            >
                                {{ __('Terms') }}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                               href="{{ route('home') }}"
                               id="modulesDropdown"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false"
                            >
                                {{ __('Modules') }}
                            </a>

                            <div class="dropdown-menu"
                                 aria-labelledby="modulesDropdown"
                                 style="max-height: 256px; overflow-y: auto;"
                            >
                                <a class="dropdown-item"
                                   href="{{ route('modules.show', 1) }}"
                                >
                                    {{ __('Module').' #1' }}
                                </a>
                                <a class="dropdown-item"
                                   href="{{ route('modules.show', 1) }}"
                                >
                                    {{ __('Module').' #2' }}
                                </a>
                                <a class="dropdown-item"
                                   href="{{ route('modules.show', 1) }}"
                                >
                                    {{ __('Module').' #3' }}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"
                                   href="{{ route('modules.list') }}"
                                >
                                    {{ __('All Module') }}
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('home') }}"
                            >
                                {{ __('Discussion') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('home') }}"
                            >
                                {{ __('Contact Us') }}
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
                                    {{ __('Login') }}
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ route('register') }}"
                                    >{{ __('Register') }}</a>
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
                                        {{ __('Logout') }}
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
        </div>
    </body>
</html>
