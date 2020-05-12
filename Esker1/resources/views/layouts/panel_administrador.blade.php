<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark text-white border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">{{Auth::user()->name}}</div>
      <div class="list-group list-group-flush">
        <a href="{{url('/administrador')}}" class="list-group-item list-group-item-action bg-dark text-white">Principal</a>
        <a href="{{url('/products')}}" class="list-group-item list-group-item-action bg-dark text-white">Productos</a>
        <a href="{{url('/usuarios')}}" class="list-group-item list-group-item-action bg-dark text-white">Usuarios</a>
        <a href="{{url('/categorias')}}" class="list-group-item list-group-item-action bg-dark text-white">Categorias</a>
        <a href="{{url('/orders')}}" class="list-group-item list-group-item-action bg-dark text-white">Ordenes</a>
        <a href="{{url('/')}}" class="list-group-item list-group-item-action bg-dark text-white">Home</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button class="btn btn-primary" id="menu-toggle"><i id="iconito" class="fas fa-angle-double-right"></i></button>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
