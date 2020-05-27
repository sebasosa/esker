<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    @include('admin.sidebar')
    <!-- /#sidebar-wrapper -->
    <div id="page-content-wrapper" class="administrador">
        <button class="btn btn-dark btn-sm iconito" id="menu-toggle"><i id="iconito" class="fas fa-angle-double-right"></i></button>

        <!-- Page Content -->
        <div class="container">
            <p class="titulo-admin">Panel de Administración</p>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card ">
                        <div class="card-header">
                            <h3>Ordenes</h3>
                            <a class="btn btn-outline-light " href="{{asset('/orders')}}"><i class="far fa-edit"></i> Administrar </a>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-sm table-bordered table-striped">
                                <thead class="thead-dark">
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
                                            <a href="#" data-type="text" {{-- que tipo de campo vamos a editar--}} data-pk="{{$order->id}}" {{-- envio el id de la orden q tiene q modificar--}} data-url="{{url("/orders/$order->id")}}"
                                              {{-- la url a la cual tiene q dirigirse la peticion ajax --}} data-title="Número de guía" {{-- titulo en cso de que no exista un valor inicial--}} data-value="{{$order->guide_number}}"
                                              {{-- valor inicial , q es el valo q en ese momento tenga el campo--}} class="set-guide-number" {{-- la clase del editable para poder configurarlo en el js--}} data-name="guide_number"></a>{{-- nombre--}}
                                        </td>
                                        <td>
                                            <a href="#" data-type="select" data-pk="{{$order->id}}" data-url="{{url("/orders/$order->id")}}" data-title="status" data-value="{{$order->status}}" class="select-status" data-name="status"></a>
                                        </td>


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

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
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card ">
                        <div class="card-header">
                            <h3>Rendimiento</h3>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-lg-6 sale-data">
                                    Ingresos del mes
                                    <span>{{$totalMensual}}USD</span>

                                </div>
                                <div class="col-lg-6 sale-data">
                                    Numero de ventas
                                    <span>{{$totalMensualCount}}</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3>Productos</h3>
                            <a class="btn btn-outline-light " href="{{asset('/products')}}"><i class="far fa-edit"></i> Administrar </a>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-sm table-bordered table-striped">
                                <thead>
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
                        <div class="card-footer clearfix">
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3>Producto</h3>

                        </div>
                        <div class="card-content">
                            <div class="ficha">
                                <div class="fotos">
                                    <div class="fotos-detalle">
                                        <div style="min-height: 410px;" class="viewport">
                                            <img src="{{asset('uploads/'.$products[0]->imagenes()->first()->name.".".$products[0]->imagenes()->first()->ext)}}" alt="">
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
                <div class="col-lg-7">
                    <div class="card ">
                        <div class="card-header">
                            <h3>Usuarios</h3>
                            <a class="btn btn-outline-light " href="{{asset('/users')}}"><i class="far fa-edit"></i> Administrar </a>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-sm table-bordered table-striped">
                                <thead>
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
                        <div class="card-footer clearfix">
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

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
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card ">
                        <div class="card-header">
                            <h3>Categorias</h3>
                            <a class="btn btn-outline-light " href="{{asset('/categories')}}"><i class="far fa-edit"></i> Administrar </a>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-sm table-bordered table-striped">
                                <thead>
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
    </div>
</div>
