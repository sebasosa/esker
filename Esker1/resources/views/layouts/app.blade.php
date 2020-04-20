<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/bf37ca3396.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Teko:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <header>
    <div id="app" class="fondo">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container top">
                  <div class="social-media topbar">
                    <ul class="">
                      <li >
                        <a class="text-danger" href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li >
                        <a class="text-danger" href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a class="text-danger" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                    </ul>


                  </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="pt-2">

                          <a class="topbar mr-5" href="{{url('/carrito')}}">
                            <i class="fas fa-shopping-cart"> {{$shopping_cart->idCarro()}} </i>

                            <span class="total">$ <span class="acumulado">0,00</span></span>
                            <span class="contador">{{$shopping_cart->productsSize()}}</span>
                          </a>


                      </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <!-- NAV PRINCIPAL -->
    <nav id="menu-pcipal">
      <div class="logo">
        <a class="top-logo" href="index.php">
          <img src="{{ asset('img/logos/logo-esker.png') }}" alt="Logo Esker Outdoors" width="185" height="153">
        </a>
      </div>

      <div class="nav-left">
        <ul>
          <li>
            <a href="index.php">
              <span>Home</span>
            </a>
          </li>
          <li>
            <a href="productos.php">
              <span>Productos</span>
            </a>
          </li>

        </ul>
      </div>
      <div class="nav-right">
        <ul>
          <li>
            <a href="faq.php">
              <span>Preguntas Frecuentes</span>
            </a>
          </li>
          <li>
            <a href="contacto.php">
              <span>Contacto</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
