<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar producto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<h4>Editar producto</h4>
		<div class="row">
			<div class="col-xl-12">

				<form action="{{route('inventario.update',$producto->id)}}" method="post" enctype="multipart/form-data">
				@csrf
                @method('PUT')
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" name="nombre" required value="{{$producto->nombre}}">
					</div>
					
					<div class="form-group">
						<label>Selecciona la categoria de la prenda</label>
						<select name="categoria" class="select_item">
							<option selected="selected">Selecciona la categoría</option>
							<option>Camisa</option>
							<option>Playera</option>
							<option>Pantalon</option>
						</select>	
					</div>
					
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<input type="text" class="form-control" name="descripcion" required value={{$producto->descripcion}}>
					</div>
					
					<div class="form-group">
						<label for="precio">Precio</label>
						<input type="text" class="form-control" name="precio" required value={{$producto->precio}}>
					</div>
					
					<div class="form-group">
						<label for="stock">Stock</label>
						<input type="text" class="form-control" name="stock" required value={{$producto->stock}}>
					</div>
					
					<div class="form-group">
						<label for="imagen">Imagen</label>
						<input type="file" name="imagen" accept="image/png">
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Guardar">
						<a href="javascript:history.back()">Ir al listado</a>
					</div>

				</form>
				
			</div>
		</div>
	</div>



</body>
</html>