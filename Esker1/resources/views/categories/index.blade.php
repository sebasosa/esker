@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
  <div id="faq" class="pagina">
    <div class="container">
      <h1>CATEGORIAS</h1>
    </div>
  </div>
  <div class="container">
    <table class="table table-bordered">
      <thead class="bg-primary">
        <tr>
          <td>ID</td>
          <td>Título</td>
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody class="bg-success">
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
  <div class="floating">
    <a href="{{url('/categories/create')}}" class="btn btn-prymary btn-fab">
      <i class="fas fa-plus"></i>
    </a>
  </div>
@endsection
