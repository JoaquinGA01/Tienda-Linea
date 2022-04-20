<!DOCTYPE html>
<html>
<!-- head -->
@extends('head')
@section('title', 'Agregar Producto')
<!-- //head -->

<body>
<!-- header -->
@include('header')
<!-- //header -->

<main>

		<div class="facts">
			
			<div class="register">

				<form action="/addProducto" method="post" enctype="multipart/form-data">			
					@csrf
					<input placeholder="Nombre del producto" name="nombre" type="text" required="">
					<label>Selecciona la categoria de la prenda</label>
					<select name="categoria" class="select_item">
						<option selected="selected">Selecciona la categoría</option>
						<option>Camisa</option>
						<option>Playera</option>
						<option>Pantalon</option>
					</select>					
					<input placeholder="Descripción del producto" name="descripcion" type="text" required="">
					<input placeholder="Precio" name="precio" type="text" required="">	
					<input placeholder="Stock" name="stock" type="text" required="">	
					<input type="file" name="imagen" accept="image/png">

					<div class="sign-up">
						<input type="submit" value="Guardar producto"/>
					</div>
				</form>
			</div>
		</div>

</main>

<!-- footer -->
@include('footer')
<!-- //footer -->
</body>
</html>