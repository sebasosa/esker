@extends('layouts.app')

@section('title', 'Actualiza tu contraseña')

@section('class', 'contenido')

@section('content')

<div class="content">
</div>
  <div class="container">
    <div class="admin-forms">
      <p>Actualiza tu contraseña</p>
      <p>Ingresa una nueva contraseña..</p>
      <form class="register-form" method="POST" action="{{ route('password.update') }}">
        @csrf
        <fieldset class="form-group">
          <input type="hidden" name="token" value="{{ $token }}">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </fieldset>
        <fieldset class="form-group">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </fieldset>
        <fieldset class="form-group">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </fieldset>
        <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
      </form>
    </div>
  </div>
@endsection
