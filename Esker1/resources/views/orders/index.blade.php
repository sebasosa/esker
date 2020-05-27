@extends('layouts.app')
@section('title', 'Panel de Administración::Ordenes de Compra')
@section('class', 'contenido')
@section('content')
<div class="content">
</div>

<div id="administrador" class="admin-forms">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        @include('admin.sidebar')
        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper" class="administrador">
            <button class="btn btn-dark btn-sm iconito" id="menu-toggle"><i id="iconito" class="fas fa-angle-double-right"></i></button>
            <div class="container">

                <p class="first fl">Listado de Ordenes</p>
                <div class="card mb-4">
                    <div class="card-content table-responsive">
                        <table class="table table-bordered table-striped">
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
                                        <a href="#" data-type="text" {{-- que tipo de campo vamos a editar--}} data-pk="{{$order->id}}" {{-- envio el id de la orden q tiene q modificar--}} data-url="{{url("/orders/$order->id")}}"
                                          {{-- la url a la cual tiene q dirigirse la peticion ajax --}} data-title="Número de guía" {{-- titulo en cso de que no exista un valor inicial--}} data-value="{{$order->guide_number}}"
                                          {{-- valor inicial , q es el valo q en ese momento tenga el campo--}} class="set-guide-number" {{-- la clase del editable para poder configurarlo en el js--}} data-name="guide_number"></a>{{-- nombre--}}
                                    </td>
                                    <td>
                                        <a href="#" data-type="select" data-pk="{{$order->id}}" data-url="{{url("/orders/$order->id")}}" data-title="status" data-value="{{$order->status}}" class="select-status" data-name="status"></a>
                                    </td>
                                    <td>{{$order->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <div class="card-footer clearfix">
                                <div class="card-tools">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </table>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
