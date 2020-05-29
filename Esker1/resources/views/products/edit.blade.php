@extends('layouts.app')
@section('title', 'Panel de Administración::Editar Producto')
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

                <p class="first fl">Editar producto</p>

                <a class="btn btn-sm btn-outline-dark agregar-item" href="{{url('/products')}}"><i class="fas fa-undo-alt"></i> Regresar </a>
                <!-- Formulario -->
                @include('products.form', ['products' => $product,'categories'=> $categories, 'url' => '/products/'.$product->id, 'method' => 'PATCH'])
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
          </div>
      </div>
  </div>
@endsection
