@extends('layouts.app')

@section('content')

  <div class="big-padding text-center white-text bg-warning">
    <h1>Compra Completada</h1>
  </div>

  <div class="container">
    <div class="card large-padding bg-primary">
      <h3>Tu pago fue <span >{{$order->status}}</span></h3>
      <p>Corrobora los detalles de tu envío</p>

      <div class="row">
        <div class="col-md-6 col-xs-12 large-padding bg-success">Correo</div>
        <div class="col-md-6 col-xs-12 large-padding bg-success">{{$order->email}}</div>
      </div>

      <div class="row">
        <div class="col-md-6 col-xs-12 large-padding bg-info">Direccion</div>
        <div class="col-md-6 col-xs-12 large-padding bg-info">{{$order->address()}}</div>
      </div>

      <div class="row">
        <div class="col-md-6 col-xs-12 large-padding bg-success">Codigo Postal</div>
        <div class="col-md-6 col-xs-12 large-padding bg-success">{{$order->postal_code}}</div>
      </div>

      <div class="row">
        <div class="col-md-6 col-xs-12 large-padding bg-info">Ciudad</div>
        <div class="col-md-6 col-xs-12 large-padding bg-info">{{$order->city}}</div>
      </div>

      <div class="row">
        <div class="col-md-6 col-xs-12 large-padding bg-success">Estado y Pais</div>
        <div class="col-md-6 col-xs-12 large-padding bg-success">{{"$order->state $order->country_code"}}</div>
      </div>

      <div class="text-center top-space">

        <a href="{{url("/compras/".$shopping_carro->custom_id)}}" class="text-dark">Link permanente de tu compra</a>
      </div>
    </div>
  </div>

@endsection
