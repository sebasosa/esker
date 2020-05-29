@extends('layouts.app')
@section('title', 'Panel de Administración::Editar Usuario')
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

                <p class="first fl">Editar usuario</p>

                <a class="btn btn-sm btn-outline-dark agregar-item" href="{{url('/users')}}"><i class="fas fa-undo-alt"></i> Regresar </a>
                <!-- Formulario -->
                @include('users.form', ['user'=> $user, 'url' => '/users/'.$user->id, 'method' => 'PATCH'])
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
