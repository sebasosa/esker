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
    <div id="page-content-wrapper" class="administrador">
        <button class="btn btn-primary" id="menu-toggle"><i id="iconito" class="fas fa-angle-double-right"></i></button>
        <div class="row">
            <div class="col-lg-8">
              <div class="card " >
              <div class="card-header">
                <h2>Ordenes</h2>
                <a class="btn btn-dark"href="{{asset('/orders')}}"> Administrar </a>
              </div>
              <div class="card-content">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td>Id. venta</td>
                      <td>Comprador</td>
                      <td>Nro. de guía</td>
                      <td>Estado</td>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                      <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->recipient_name}}</td>

                        <td>
                          <a href="#"
                              data-type="text" {{-- que tipo de campo vamos a editar--}}
                              data-pk="{{$order->id}}"{{-- envio el id de la orden q tiene q modificar--}}
                              data-url="{{url("/orders/$order->id")}}"{{-- la url a la cual tiene q dirigirse la peticion ajax --}}
                              data-title="Número de guía"{{-- titulo en cso de que no exista un valor inicial--}}
                              data-value="{{$order->guide_number}}"{{-- valor inicial , q es el valo q en ese momento tenga el campo--}}
                              class="set-guide-number"{{-- la clase del editable para poder configurarlo en el js--}}
                              data-name="guide_number"></a>{{-- nombre--}}
                        </td>
                        <td>
                          <a href="#"
                              data-type="select"
                              data-pk="{{$order->id}}"
                              data-url="{{url("/orders/$order->id")}}"
                              data-title="status"
                              data-value="{{$order->status}}"
                              class="select-status"
                              data-name="status"></a>
                        </td>


                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            <div class="col-lg-4">
              <div class="card " >
              <div class="card-header">
                <h2>Mensual</h2>

              </div>
              <div class="card-content">
                <div class="row">
                  <div class="col-lg-6 sale-data">
                    <span>{{$totalMensual}}USD</span>
                    Ingresos del mes
                  </div>
                  <div class="col-lg-6 sale-data">
                    <span>{{$totalMensualCount}}</span>
                    Numero de ventas
                  </div>
                </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
              <div class="card " >
              <div class="card-header">
                <h2>Productos</h2>
                <a class="btn btn-dark"href="{{asset('/products')}}"> Administrar </a>
              </div>
              <div class="card-content">
                <table class="table table-bordered">
                  <thead >
                    <tr>
                      <td>Id producto</td>
                      <td>Título</td>
                      <td class="faq-lg">Descripción corta</td>
                      <td>Precio</td>
                      <td class="faq-lg">Categoria</td>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->title}}</td>
                        <td class="faq-lg">{{$product->short_description}}</td>
                        <td>{{$product->pricing}}</td>
                        <td class="faq-lg">{{$product->category('title')}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            <div class="col-lg-4">
              <div class="card " >
              <div class="card-header">
                <h2>Producto</h2>

              </div>
              <div class="card-content">
                <div class="ficha">
                  <div class="fotos">
                    <div class="fotos-detalle">
                      <div style="min-height: 410px;" class="viewport">
                        <img  src="{{asset('uploads/'.$products[0]->imagenes()->first()->name.".".$products[0]->imagenes()->first()->ext)}}" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="opciones">
                    <h2 class="nombre-producto">{{$products[0]->title}}</h2>
                    <p class="precio">
                      <span class="precio-descuento">${{$products[0]->pricing}}</span>
                    </p>
                    <div class="descripcion-corta">
                      <p>{{$products[0]->short_description}}
                      </p>
                    </div>
                  </div>
                  <div class="descripcion-larga">
                    <h3>Detalle</h3>
                    {{$products[0]->long_description}}
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
              <div class="card " >
              <div class="card-header">
                <h2>Usuarios</h2>
                <a class="btn btn-dark"href="{{asset('/users')}}"> Administrar </a>
              </div>
              <div class="card-content">
                <table class="table table-bordered">
                  <thead >
                    <tr>
                      <td>Id usuario</td>
                      <td>Nombre</td>
                      <td>E-mail</td>
                      <td class="faq-lg">Rol</td>
                      <td class="faq-lg">Avatar</td>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>

                        <td class="faq-lg">{{$user->role}}</td>
                        <td class="faq-lg">Avatar</td>

                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            <div class="col-lg-4">
              <div class="card " >
              <div class="card-header">
                <h2>Categorias</h2>
                <a class="btn btn-dark"href="{{asset('/categorias')}}"> Administrar </a>
              </div>
              <div class="card-content">
                <table class="table table-bordered">
                  <thead >
                    <tr>
                      <td>Id Categoria</td>
                      <td>Título</td>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $cat)
                      <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->title}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
        </div>
    </div>

    <!-- /#page-content-wrapper -->
