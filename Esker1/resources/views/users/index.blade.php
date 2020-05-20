@extends('layouts.app')
@section('title', 'Usuarios')
@section('content')
  <div id="faq" class="pagina">
    <div class="container">
      <h1>USUARIOS</h1>
    </div>
  </div>
  <main id="administrador" class="contenido">
  <div class="d-flex" id="wrapper">
    @include('admin.sidebar')
    <div id="page-content-wrapper" class="administrador">
      <button class="btn btn-primary" id="menu-toggle"><i id="iconito" class="fas fa-angle-double-right"></i></button>

        <div class="container usuarios administrador">
          <a href="{{url('/users/create')}}" class="btn agregar-item" title="Agregar Usuarios" >
            <i class="fas fa-plus"></i>
          </a>
          <table class="table table-bordered">
            <thead >
              <tr>
                <td>Nombre</td>
                <td>Email</td>
                <td>Rol</td>
                <td>Acciones</td>
              </tr>
            </thead>
            <tbody >
              @foreach ($users as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role}}</td>
                  <td>
                    <a href="{{url('/users/'.$user->id.'/edit')}}"><i class="far fa-edit text-white"></i></a>
                    @include('users.delete', ['user' => $user->id])
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>
  </main>


@endsection
