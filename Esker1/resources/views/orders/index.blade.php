@extends('layouts.app')

@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2></h2>
    </div>
    <div class="panel-body">
      <h3>Estadísticas</h3>
      <div class="row top-space">
        <div class="col-xs-4 col-md-3 col-lg-2 sale-data">
          <span>{{$totalMensual}}USD</span>
          Ingresos del mes
        </div>
        <div class="col-xs-4 col-md-3 col-lg-2 sale-data">
          <span>{{$totalMensualCount}}</span>
          Numero de ventas
        </div>
      </div>
      <h3>Ventas</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <td>Id. venta</td>
            <td>Comprador</td>
            <td>Dirección</td>
            <td>Nro. de guía</td>
            <td>Estado</td>
            <td>Fecha de venta</td>
            <td>Acciones</td>
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
              <td>Acciones</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
