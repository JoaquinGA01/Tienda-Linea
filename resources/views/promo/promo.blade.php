<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Promociones</title>
</head>
<body>
    <div class="container">
        <h4>Administración de Promociones</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('promociones.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value={{$texto}}>
                        </div>
                        <div class="col-auto my-3">
                            <input type="submit" class="btn btn-light" value="Buscar">
                        </div>
                        <div class="col-auto my-3">
                            <a href="{{route('promociones.create')}}" class="btn btn-success">+ Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12 my-4">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Stock</th>
                                <th>Categoria</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Promocion</th>
                                <th>Imagen del producto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($promociones)<=0)                        
                            <tr>
                                <td colspan="9">No se encontraron coincidencias</td>
                            </tr>
                            @else

                            @foreach ($promociones as $promo)
                            <tr>
                            <td> <a href="{{route('promociones.edit', $promo->id)}}" class="btn btn-warning btn-sm">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$promo->id}}">
                                Eliminar
                            </button>
                            </td>
                            <td>{{$promo->id}}</td>
                            <td>{{$promo->nombre}}</td>
                            <td>{{$promo->stock}}</td>
                            <td>{{$promo->categoria}}</td>
                            <td>{{$promo->descripcion}}</td>
                            <td>{{$promo->precio}}</td>
                            <td>{{$promo->promocion}}</td>
                            <td>{{$promo->ruta}}</td>
                            </tr>
                            @include('promo.delete')
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$promociones->links()}}
                </div>             
            </div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>