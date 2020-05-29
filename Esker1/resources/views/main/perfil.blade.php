@extends('layouts.app')
@section('title', 'Mi Perfil')
@section('class', 'contenido')
@section('content')
<div class="content">
</div>
<div class="container">
    <p class="first text-center">Perfil de Usuario</p>
    <div class="row">
      <div class="card col-md-6 offset-md-3 mb-5">
        <div class="row no-gutters">
          <div>
            <img class="card-img-top img-user" src="{{asset('/user/'.Auth::user()->imagen)}}" alt="Avatar">
          </div>
          <div >
            <div class="card-body">
              <span>Nombre: </span>
              <h5 class="card-title">{{Auth::user()->name}}</h5>
              <span>Email: </span>
              <h5 class="card-text">{{Auth::user()->email}}</h5>
            </div>
            <div class="card-body">
              <a class="btn btn-sm btn-primary fl mb-1 mr-1" href="{{url('/users/'.Auth::user()->id.'/editar')}}"> Editar</a>
              <a class="btn btn-sm btn-outline-dark agregar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
                  Cerrar Sesión
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
