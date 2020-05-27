@extends('layouts.app')

@section('content')
  <div id="registro" class="pagina">
    <div class="container">
      <h1>REGISTRARSE</h1>
    </div>
  </div>
  <main class="contenido">
    <div class="container">
        <div class="registrarse">
          <p>Nuevo Cliente? Registrate aquí</p>
          <p>Al crear una cuenta en nuestra página podrás moverte rápidamente por el proceso de pago, guardar múltiples direcciones de envío, ver y seguir el rastro de los pedidos de tu cuenta y más!</p>
          <form class="register-form" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset class="form-group">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre y Apellido">
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </fieldset>

            <fieldset class="form-group">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </fieldset>

            <fieldset class="form-group">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Escribi tu contraseña">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </fieldset>

            <fieldset class="form-group">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repetí tu contraseña">
            </fieldset>
            <fieldset class="form-group">
              <input id="avatar" type="file" class="form-control" name="avatar">
            </fieldset>

            <button type="submit" class="btn btn-primary">Registrarme</button>
          </form>
        </div>
    </div>
  </main>

@endsection
