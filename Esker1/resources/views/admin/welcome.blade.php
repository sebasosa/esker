@extends('layouts.app')

@section('title', 'Panel de Administración::Esker Outdoors')

@section('class', 'contenido')

@section('content')
<div class="content">
</div>

<div id="administrador" class="admin-forms">
    @if (Auth::user() && Auth::user()->role == 'admin')
    @include('admin.panel_administrador')
    @else
    <div class="container">
        <p class="m-4"></p>
        <p class="first">Ingreso Administrador</p>


        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf

            <fieldset class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </fieldset>

            <fieldset class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </fieldset>

            <fieldset class="form-group">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">{{ __('Recordar Usuario') }}</label>
            </fieldset>

            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
            <p class="olvidopass">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('* Olvidé mi contraseña') }}
                </a>
            </p>

            @endif

        </form>
    </div>
    @endif

</div>
@endsection
