<!DOCTYPE html>
<html>
<!-- head -->
@extends('head')
@section('title', 'Camisas')
<!-- //head -->


<body>
<!-- header -->
<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">
						¿Que esperas? ¡Registrate ahora!  </h4> 
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Iniciar sesión</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Registrarse</span></li>
									</ul>
									<!-- Pop up de iniciar sesión / registro --> 		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input name="Email" placeholder="Correo electronico" type="text" required="">						
													<input name="Password" placeholder="Contraseña" type="password" required="">										
													<div class="sign-up">
														<input type="submit"  value="Iniciar sesión" />
													</div>
												</form>
											</div>
										</div> 
									</div>	

									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											
											<div class="register">

												<form action="/guardarUser" method="post">			
													@csrf
													<input placeholder="Nombre" name="Name" type="text" required="">
													<input placeholder="Email" name="Email" type="email" required="">	
													<input placeholder="Contraseña" name="Password" type="password" required="">	
													<input placeholder="Confirmar contraseña" name="Password" type="password" required="">
													<div class="sign-up">
														<input type="submit" value="Crear cuenta"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="../js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADER -->
	<div class="header">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><img src="../images/user.png"/></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.php">CHEIN<span>Lo mejor en moda</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><img src="../images/search.png"/></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Ingresa tu búsqueda...">
						<input type="submit" value="Buscar">
					</form>
				</div>
			</div>
			<div class="cart box_1">
				<a href="checkout.php">
					<div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> artículos)</div>
					<img src="../images/bag.png" alt="" />
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Carrito vacío</a></p>
				<div class="clearfix"> </div>
			</div>	
			<div class="clearfix"> </div>
		</div>
	</div>	

	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php" class="act">Inicio</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Caballeros</h6>
											
											 <li><a href="camisas">Camisas<span>¡Nuevo!</span></a></li> 
 											<li><a href="sweaters.php">Pantalones</a></li>
											<li><a href="skirts.php">Playeras</a></li> 
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Damas</h6>
											<li><a href="salwars.php">Vestidos</a></li>
											<li><a href="sarees.php">Blusas</a></li>
											<li><a href="sarees.php">Pantalones</a></li>
											<!-- <li><a href="products.php"><i>Summer Store</i></a></li> -->									
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Niños</h6>
											<li><a href="sandals.php">Camisas</a></li>
											<li><a href="sandals.php">Pantalones</a></li>
											<li><a href="sandals.php">Playeras</a></li>
											<li><a href="sandals.php">Shorts</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Niñas</h6>
											<li><a href="sandals.php">Vestidos</a></li>
										</ul>
									</div>									
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about">Acerca de nosotros</a></li>						
						<li><a href="mail.php">Contactanos</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>	
<!-- //header -->
<!-- banner -->
	<div class="banner9" id="home1">
		<div class="container">
			<h2>Women Sandals<span>up to</span> Flat 40% <i>Discount</i></h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Sandals</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- dresses -->
	<div class="dresses">
		<div class="container">
			<div class="w3ls_dresses_grids">
				<div class="col-md-4 w3ls_dresses_grid_left">
					<div class="w3ls_dresses_grid_left_grid">
						<h3>Categories</h3>
						<div class="w3ls_dresses_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>New Arrivals
									</a>
								  </h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								  <div class="panel-body panel_text">
									<ul>
										<li><a href="dresses.html">Dresses</a></li>
										<li><a href="sweaters.html">Sweaters</a></li>
										<li><a href="skirts.html">Shorts & Skirts</a></li>
										<li><a href="jeans.html">Jeans</a></li>
										<li><a href="shirts.html">Shirts</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Foot Wear
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
										<li><a href="sandals.html">Flats</a></li>
										<li><a href="sandals.html">Sandals</a></li>
										<li><a href="sandals.html">Boots</a></li>
										<li><a href="sandals.html">Heals</a></li>
										<li><a href="sandals.html">Shirts</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							</div>
							<ul class="panel_bottom">
								<li><a href="products.html">Summer Store</a></li>
								<li><a href="dresses.html">New In Clothing</a></li>
								<li><a href="sandals.html">New In Shoes</a></li>
								<li><a href="products.html">Latest Watches</a></li>
							</ul>
						</div>
					</div>
					<div class="w3ls_dresses_grid_left_grid">
						<h3>Color</h3>
						<div class="w3ls_dresses_grid_left_grid_sub">
							<div class="ecommerce_color">
								<ul>
									<li><a href="#"><i></i> Red(5)</a></li>
									<li><a href="#"><i></i> Brown(2)</a></li>
									<li><a href="#"><i></i> Yellow(3)</a></li>
									<li><a href="#"><i></i> Violet(6)</a></li>
									<li><a href="#"><i></i> Orange(2)</a></li>
									<li><a href="#"><i></i> Blue(1)</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="w3ls_dresses_grid_left_grid">
						<h3>Size</h3>
						<div class="w3ls_dresses_grid_left_grid_sub">
							<div class="ecommerce_color ecommerce_size">
								<ul>
									<li><a href="#">Medium</a></li>
									<li><a href="#">Large</a></li>
									<li><a href="#">Extra Large</a></li>
									<li><a href="#">Small</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 w3ls_dresses_grid_right">

					<div class="clearfix"> </div>

					<div class="w3ls_dresses_grid_right_grid2">
						<div class="w3ls_dresses_grid_right_grid2_left">
							
							<h3>Resultados:  </h3>
						</div>
						<div class="w3ls_dresses_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Predeterminado</option>
								<option>Ordenar por nombre</option>
								<option>Ordenar por precio Más bajo al más alto</option>
								<option>Ordenar por precio más alto al más bajo</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="w3ls_dresses_grid_right_grid3">
						
						@foreach($productos as $producto)
						
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">

							<div class="agile_ecommerce_tab_left dresses_grid">
								<!-- imagen -->
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />

									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>								
								</div>	
								<h5><a href="#">{{ $producto-> nombre  }}</a></h5>
								<div class="simpleCart_shelfItem">
									<!-- precio -->
									<p><span>$320</span> <i class="item_price">$ {{$producto-> precio }}</i></p>
									<p><a class="item_add" href="#">Agregar al carrito</a></p>
								</div>
							</div>
						</div>
											
						<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal6">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<div class="col-md-5 modal_body_left">
											<img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
										</div>
										<div class="col-md-7 modal_body_right">
											<h4>{{ $producto-> nombre  }}</h4>
											<p>
											{{ $producto-> descripcion  }}
											</p>

											<div class="modal_body_right_cart simpleCart_shelfItem">
												<p><span>$320</span> <i class="item_price">$ {{$producto-> precio }}</i></p>
												<p><a class="item_add" href="#">Agregar al carrito</a></p>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</section>
							</div>
							
						</div>
						
					</div>
					@endforeach
																							
					</div>
									
				</div>
				
			</div>
		</div>
	</div>
	
<!-- //dresses -->

<!-- footer -->
@include('footer')
<!-- //footer -->
</body>
</html>