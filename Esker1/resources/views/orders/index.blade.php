@extends('layouts.app')
@section('title', 'Ordenes')
@section('content')
  <div id="bienvenidos" class="pagina">
    <div class="container">
      <h1>Ordenes</h1>
    </div>
  </div>
  <main id="administrador" class="contenido">
  <div class="d-flex" id="wrapper">
    @include('admin.sidebar')
    <div id="page-content-wrapper" class="administrador">
      <button class="btn btn-primary" id="menu-toggle"><i id="iconito" class="fas fa-angle-double-right"></i></button>
      <div class="container">
        <div class="panel panel-default">
          <div id="estadisticas" class="panel-body">
            <h2>Estadísticas</h2>
            <div class="row top-space">
              <div class="col-lg-4 sale-data">
                <span>{{$totalMensual}}USD</span>
                <h3>Ingresos del mes</h3>
              </div>
              <div class="col-lg-4 sale-data">
                <span>{{$totalMensualCount}}</span>
                <h3>Numero de ventas</h3>
              </div>
            </div>
            <h2>Ventas</h2>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td>Id. venta</td>
                  <td>Comprador</td>
                  <td>Dirección</td>
                  <td>Nro. de guía</td>
                  <td>Estado</td>
                  <td>Fecha de venta</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                  <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->recipient_name}}</td>
                    <td>{{$order->address()}}</td>
                    <td>
                      <a href="#"
                          data-type="text" {{-- que tipo de campo vamos a editar--}}
                          data-pk="{{$order->id}}"{{-- envio el id de la orden q tiene q modificar--}}
                          data-url="{{url("/orders/$order->id")}}"{{-- la url a la cual tiene q dirigirse la peticion ajax --}}
                          data-title="Número de guía"{{-- titulo en cso de que no exista un valor inicial--}}
                          data-value="{{$order->guide_number}}"{{-- valor inicial , q es el valo q en ese momento tenga el campo--}}
                          class="set-guide-number"{{-- la clase del editable para poder configurarlo en el js--}}
                          data-name="guide_number"></a>{{-- nombre--}}
                    </td>
                    <td>
                      <a href="#"
                          data-type="select"
                          data-pk="{{$order->id}}"
                          data-url="{{url("/orders/$order->id")}}"
                          data-title="status"
                          data-value="{{$order->status}}"
                          class="select-status"
                          data-name="status"></a>
                    </td>
                    <td>{{$order->created_at}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@endsection
