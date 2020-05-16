@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
  <div id="faq" class="pagina">
    <div class="container">
      <h1>CATEGORIAS</h1>
    </div>
  </div>
  <main id="administrador" class="contenido">
  <div class="d-flex" id="wrapper">
    @include('admin.sidebar')
    <div id="page-content-wrapper" class="administrador">
      <button class="btn btn-primary" id="menu-toggle"><i id="iconito" class="fas fa-angle-double-right"></i></button>

        <div class="container categorias administrador">
          <a href="{{url('/categories/create')}}" class="btn agregar-item" title="Agregar Categorias" >
            <i class="fas fa-plus"></i>
          </a>
          <table class="table table-bordered">
            <thead >
              <tr>
                <td>ID</td>
                <td>Título</td>
                <td>Acciones</td>
              </tr>
            </thead>
            <tbody >
              @foreach ($categorias as $category)
                <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->title}}</td>
                  <td>
                    <a href="{{url('/categories/'.$category->id.'/edit')}}"><i class="far fa-edit text-white"></i></a>
                    @include('categories.delete', ['category' => $category->id])
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
