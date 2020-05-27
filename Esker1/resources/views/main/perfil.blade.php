@extends('layouts.app')
@section('titulo', "Perfil")
@section('content')
  <div id="faq"class="pagina">
    <div class="container">
      <h1>Perfil</h1>
    </div>
  </div>
  <div class="container">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('/user/'.Auth::user()->imagen)}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{Auth::user()->name}}</h5>
        <p class="card-text">{{Auth::user()->email}}</p>
        <a class="btn btn-sm btn-outline-primary fl mb-1 mr-1" href="{{url('/users/'.Auth::user()->id.'/edit')}}"> Editar</a>
      </div>
    </div>
  </div>
@endsection
