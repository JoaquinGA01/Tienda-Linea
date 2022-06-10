<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Insertar</title>
</head>
<body>
    <div class="container">
        <h4>Nueva Promoción</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('promociones.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required maxlength="255">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" name="stock" required maxlength="255">
                    </div>
                    <div class="form-group">
						<label>Selecciona la categoria de la prenda</label>
						<select name="categoria" class="select_item">
							<option selected="selected">Selecciona la categoría</option>
							<option>Camisa</option>
							<option>PlayeraC</option>
							<option>PantalonesC</option>
							<option>VestidosD</option>
							<option>Blusas</option>
							<option>PantalonesD</option>
							<option>Shorts</option>
							<option>VestidosN</option>
						</select>	
					</div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" required maxlength="255">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <!--<input placeholder="%" type="number" class="form-control" name="promocion" required maxlength="255">-->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="precio" required maxlength="255">
                        <div class="input-group-append">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="promocion">Promocion</label>
                        <!--<input placeholder="%" type="number" class="form-control" name="promocion" required maxlength="255">-->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">%</span>
                        </div>
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="promocion" required maxlength="255">
                        <div class="input-group-append">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ruta">Imágen</label>
                        <input type="text" class="form-control" name="ruta" required maxlength="255">
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