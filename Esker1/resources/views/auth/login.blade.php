@extends('layouts.app')

@section('content')
  <div id="login" class="pagina">
    <div class="container">
      <h1>LOGIN</h1>
    </div>
  </div>
<div class="contenido">
  <div class="container">
    <div class="login">
      <p>Si ya tenés una cuenta, ingresá los datos a continuación</p>
      <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf
        <fieldset class="form-group">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Escribi tu Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </fieldset>

        <fieldset class="form-group">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Escribi tu contraseña">
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </fieldset>

        <fieldset class="form-group">
          <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
          <label for="remember">{{ __('Recordar Usuario') }}</label>
        </fieldset>
        <button type="submit" class="btn btn-primary">{{ __('Iniciar Sesión') }}</button>
        @if (Route::has('password.request'))
            <p class="olvidopass">
              <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('* Olvidé mi contraseña') }}
              </a>
            </p>
        @endif

      </form>
    </div>
    <div class="registro">
      <p>Nuevos Clientes</p>
      <p>Al crear una cuenta en nuestra página podrás moverte rápidamente por el proceso de pago, guardar múltiples direcciones de envío, ver y seguir el rastro de los pedidos de tu cuenta y más!</p>
      <a href="{{ route('register') }}" class="btn btn-secondary">Quiero crear mi cuenta</a>
    </div>
</div>

@endsection
