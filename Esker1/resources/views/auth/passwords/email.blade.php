@extends('layouts.app')

@section('title', 'Olvidaste tu contraseña')

@section('class', 'contenido')

@section('content')
<div class="content">
</div>
  <div class="container">
    <div class="admin-forms">
      <p>Olvidaste tu contraseña?</p>
      <p>Por favor ingresá tu email debajo. Recibirás un link en tu correo para restablecer tu contraseña..</p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form class="register-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <fieldset class="form-group">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </fieldset>
            <button type="submit" class="btn btn-primary">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </div>

@endsection
