<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
    <div class="container">
        <h4>Editar Promoción</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('promociones.update', $promo->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required maxlength="255" value="{{$promo->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" name="stock" required maxlength="255" value="{{$promo->stock}}">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input type="text" class="form-control" name="categoria" required maxlength="255" value="{{$promo->categoria}}">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" required maxlength="255" value="{{$promo->descripcion}}">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio" required maxlength="255" value="{{$promo->precio}}">
                    </div>
                    <div class="form-group">
                        <label for="promocion">Promocion</label>
                        <input type="text" class="form-control" name="promocion" required maxlength="255" value="{{$promo->promocion}}">
                    </div>
                    <div class="form-group">
                        <label for="ruta">Imágen</label>
                        <input type="text" class="form-control" name="ruta" required maxlength="255" value="{{$promo->ruta}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary my-3" value="Guardar">
                        <input type="reset" class="btn btn-danger my-3" value="Cancelar">
                        <a href="javascript:history.back()">Volver al inicio</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>