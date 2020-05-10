<header>
  <div id="app" class="fondo">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container clasex">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto p-2 flex-row social-media">
                  <li >
                    <a class="text-danger mr-3 " href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li >
                    <a class="text-danger mr-3" href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a class="text-danger mr-3" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                  </li>
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
                  <li>
                    <a class="faq-xs" href="{{url('/')}}">
                      <span>Home</span>
                    </a>
                  </li>
                  <li>
                    <a class="faq-xs" href="{{url('/productos')}}">
                      <span>Productos</span>
                    </a>
                  </li>
                  <li>
                    <a class="faq-xs"href="{{url('/faq')}}">
                      <span>Preguntas Frecuentes</span>
                    </a>
                  </li>
                  <li>
                    <a class="faq-xs" href="{{url('/contacto')}}">
                      <span>Contacto</span>
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
      <a class="top-logo" href="{{url('/')}}">
        <img src="{{ asset('img/logos/logo-esker.png') }}" alt="Logo Esker Outdoors" width="185" height="153">
      </a>
    </div>

    <div class="nav-left">
      <ul>
        <li>
          <a  href="{{url('/')}}">
            <span>Home</span>
          </a>
        </li>
        <li>
          <a href="{{url('/productos')}}">
            <span>Productos</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="nav-right">
      <ul>
        <li>
          <a class="faq-lg" href="{{url('/faq')}}">
            <span>Preguntas Frecuentes</span>
          </a>
        </li>
        <li>
          <a href="{{url('/contacto')}}">
            <span>Contacto</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>
