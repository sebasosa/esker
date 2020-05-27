@extends('layouts.app')
@section('title', 'Panel de Administración::Listado de Productos')
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

                <p class="first fl">Listado de Productos</p>

                <a class="btn btn-outline-dark agregar-item" href="{{url('/products/create')}}" title="Agregar Categorias"><i class="fas fa-plus-circle"></i> Agregar Producto </a>

                <div class="card mb-4">
                    <div class="card-content table-responsive">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Imagen</td>
                                    <td>Título</td>
                                    <td>Descripción corta</td>
                                    <td>Descripción larga</td>
                                    <td>Precio</td>
                                    <td>Categoria</td>
                                    <td>Acciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>
                                        @if ($product->imagen())
                                        <img src="{{asset('uploads/'.$product->imagenes()->first()->name.".".$product->imagenes()->first()->ext)}}" class="mini">
                                        @else
                                        <img src="{{asset('img/productos/cuello.jpg')}}" class="mini">
                                        @endif
                                    </td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->short_description}}</td>
                                    <td>{{$product->long_description}}</td>
                                    <td>{{$product->pricing}}</td>
                                    <td>{{$product->category('title')}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-primary fl mb-1" href="{{url('/products/'.$product->id.'/edit')}}"> Editar</a>
                                        @include('products.delete', ['product' => $product->id])

                                    </td>
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
