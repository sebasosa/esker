<div class="bg-dark text-white border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">{{Auth::user()->name}}</div>
  <div class="list-group list-group-flush">
    <a href="{{url('/administrador')}}" class="list-group-item list-group-item-action bg-dark text-white">Principal</a>
    <a href="{{url('/products')}}" class="list-group-item list-group-item-action bg-dark text-white">Productos</a>
    <a href="{{url('/users')}}" class="list-group-item list-group-item-action bg-dark text-white">Usuarios</a>
    <a href="{{url('/categories')}}" class="list-group-item list-group-item-action bg-dark text-white">Categorias</a>
    <a href="{{url('/orders')}}" class="list-group-item list-group-item-action bg-dark text-white">Ordenes</a>
  </div>
</div>
