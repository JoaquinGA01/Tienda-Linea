<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario CHEIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    @if(auth()->check())

    <div class="container">
        <h4>Gestión de Inventario</h4>

            <div class="vh-10 row m-0 text-center align-items-end justify-content-end">

                <div class="col-auto">
                    <p  style="text-align:right">Bienvenido <b>{{ auth()->user()->name }}</b></p>
                    <a href="{{route('admin.destroy')}}" class="btn btn-warning btn-md"> Cerrar sesión </a>
                </div>   

            </div>        
    
        <div class="row">
            
            <!-- BUSQUEDA -->
            <div class="col-xl-12">
                <form action="{{route('inventario.index')}}" method="get" value="{{$texto}}">
                    <div class="form-row">

                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto">
                        </div>
                        
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>

                        <div class="col-auto my-1">
                            <a href="{{route('inventario.create')}}" class="btn btn-success">Añadir prenda</a>
                        </div>

                    </div>
                </form>
            </div>

            <!-- PROMOS -->
            <div class="col-xl-12">
                <form action="{{route('promociones.index')}}" method="get">
                    <div class="form-row">

                        <div class="col-auto my-4">
                            <a href="{{route('promociones.index')}}" class="btn btn-info">Promociones</a>
                        </div>

                    </div>
                </form>
            </div>


            <!-- LISTADO DE PRODUCTOS -->
            <div class="col-xl-12">                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                    <tbody>
                        @if(count($productos)<=0)
                            <tr>
                                <td colspan="8">No se encontraron resultados</td>
                            </tr> 
                        @else
                        @foreach($productos as $producto)
                        <tr>
                            <td> <a href="{{route('inventario.edit',$producto->id)}}" class="btn btn-warning btn-sm"> Editar </a>

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$producto->id}}">
                                    Eliminar
                                </button>                                

                                </td>

                            <td>{{$producto->id}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->categoria}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->stock}}</td>
                            <td>
                                    <img width="20%" src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
                                </td>                               
                        </tr>
                        @include('eliminar')
                        @endforeach
                        @endif
                    </tbody> 
                    </table>
                    {{$productos->links()}}
                </div>
            </div>
        </div>
    </div>
    @else
        @include("loginAdmin");
    @endif

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>