@extends('layouts.app')
@section('title', 'Panel de Administración::Agregar Categoria')
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

                <p class="first fl">Agregar nueva categoria</p>

                <a class="btn btn-sm btn-outline-dark agregar-item" href="{{url('/categories')}}"><i class="fas fa-undo-alt"></i> Regresar </a>
                <!-- Formulario -->
                @include('categories.form', ['category'=> $category, 'url' => '/categories', 'method' => 'POST'])
            </div>
        </div>
    </div>
</div>
@endsection
