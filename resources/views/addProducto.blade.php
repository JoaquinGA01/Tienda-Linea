<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Añadir producto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<h4>Añadir producto</h4>
		<div class="row">
			<div class="col-xl-12">

				<form action="{{route('inventario.store')}}" method="post" enctype="multipart/form-data">
				@csrf
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" name="nombre" required>
					</div>
					
					<div class="form-group">
						<label>Selecciona la categoria de la prenda</label>
						<select name="categoria" class="select_item">
							<option selected="selected">Selecciona la categoría</option>
							<option>Camisa</option>
							<option>Playera</option>
							<option>PantalonesC</option>
							<option>Vestidos</option>
							<option>Blusas</option>
							<option>PantalonesD</option>
						</select>	
					</div>
					
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<input type="text" class="form-control" name="descripcion" required>
					</div>
					
					<div class="form-group">
						<label for="precio">Precio</label>
						<input type="text" class="form-control" name="precio" required>
					</div>
					
					<div class="form-group">
						<label for="stock">Stock</label>
						<input type="text" class="form-control" name="stock" required>
					</div>
					
					<div class="form-group">
						<label for="imagen">Imagen</label>
						<input type="file" name="imagen" accept="image/png">
					</div>

					<div class="form-group">
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