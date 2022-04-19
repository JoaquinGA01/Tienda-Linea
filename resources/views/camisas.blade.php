<!DOCTYPE html>
<html>
<!-- head -->
@extends('head')
@section('title', 'Camisas')
<!-- //head -->

<body>
<!-- header -->
@include('header')
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