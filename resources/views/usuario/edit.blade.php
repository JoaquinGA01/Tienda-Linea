<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion de usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4>Modifica los datos del usuario</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('usuario.update',$usuario->id)}}" method="post">
                @csrf    
                @method('PUT')
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" require maxlength="50" required value={{$usuario->name}}>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="email">Correo</label>
                        <input type="text" class="form-control" name="email" require maxlength="50" required value={{$usuario->email}}>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" require maxlength="15" required value={{$usuario->password}}>
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>