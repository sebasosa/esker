@extends('layouts.app')
@section('title', 'Mi Perfil')
@section('class', 'contenido')
@section('content')
<div class="content">
</div>
  <div class="container">
    <p class="first">Perfil de Usuario</p>
    <div class="card mb-4 perfil-user" style="max-width: 540px;" >
      <div class="row no-gutters">
        <div class="col-md-4 image-user">
          <img class="card-img-top" src="{{asset('/user/'.Auth::user()->imagen)}}" alt="Card image cap">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <span>Nombre: </span>
            <h5 class="card-title">{{Auth::user()->name}}</h5>
            <span>Email: </span>
            <h5 class="card-text">{{Auth::user()->email}}</h5>
            <a class="btn btn-sm btn-outline-primary fl mb-1 mr-1" href="{{url('/users/'.Auth::user()->id.'/editar')}}"> Editar</a>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
