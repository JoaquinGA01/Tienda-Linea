<!DOCTYPE html>
<html>
<head>
<title>CHEIN Tienda en línea | Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="../js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="../js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
</head>
	
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
											
											 <li><a href="camisas">Camisas<span>New</span></a></li> 
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
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="images/75.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos1">
								<h3>Sandals <span>Up To</span> 10% Discount</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="images/74.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos">
								<h3>Blue Color <span>Rubber</span> Sandals</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_dresses_grid_right_grid2">
						<div class="w3ls_dresses_grid_right_grid2_left">
							<h3>Showing Results: 0-1</h3>
						</div>
						<div class="w3ls_dresses_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newness</option>
								<option>Sort by price: low to high</option>
								<option>Sort by price: high to low</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Tan Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$420</span> <i class="item_price">$340</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
								<div class="dresses_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Bronze Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$320</span> <i class="item_price">$250</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Belly Shoes</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$231</span> <i class="item_price">$200</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Black Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$323</span> <i class="item_price">$270</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Brown Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$233</span> <i class="item_price">$190</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Black Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$342</span> <i class="item_price">$270</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
								<div class="dresses_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Beige Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$312</span> <i class="item_price">$212</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
								<div class="dresses_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Brown Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$234</span> <i class="item_price">$180</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/c9.jpg" alt=" " class="img-responsive" />
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
									<img src="images/c5.jpg" alt=" " class="img-responsive" />
									<img src="images/c6.jpg" alt=" " class="img-responsive" />
									<img src="images/c7.jpg" alt=" " class="img-responsive" />
									<img src="images/c8.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Nicci Black Sandals</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$323</span> <i class="item_price">$250</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<div class="col-md-5 modal_body_left">
											<img src="images/39.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="col-md-7 modal_body_right">
											<h4>a good look women's Long Skirt</h4>
											<p>Ut enim ad minim veniam, quis nostrud 
												exercitation ullamco laboris nisi ut aliquip ex ea 
												commodo consequat.Duis aute irure dolor in 
												reprehenderit in voluptate velit esse cillum dolore 
												eu fugiat nulla pariatur. Excepteur sint occaecat 
												cupidatat non proident, sunt in culpa qui officia 
												deserunt mollit anim id est laborum.</p>
											<div class="rating">
												<div class="rating-left">
													<img src="images/star-.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="images/star-.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="images/star-.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="images/star.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="images/star.png" alt=" " class="img-responsive" />
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="modal_body_right_cart simpleCart_shelfItem">
												<p><span>$320</span> <i class="item_price">$250</i></p>
												<p><a class="item_add" href="#">Add to cart</a></p>
											</div>
											<h5>Color</h5>
											<div class="color-quality">
												<ul>
													<li><a href="#"><span></span>Red</a></li>
													<li><a href="#" class="brown"><span></span>Yellow</a></li>
													<li><a href="#" class="purple"><span></span>Purple</a></li>
													<li><a href="#" class="gray"><span></span>Violet</a></li>
												</ul>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/24.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>a good look women's Sandal</h4>
							<p>Ut enim ad minim veniam, quis nostrud 
								exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$320</span> <i class="item_price">$250</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span>Red</a></li>
									<li><a href="#" class="brown"><span></span>Yellow</a></li>
									<li><a href="#" class="purple"><span></span>Purple</a></li>
									<li><a href="#" class="gray"><span></span>Violet</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>	
<!-- //dresses -->
<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>CONTACTO</h3>
					<p>Puedes contactarnos a través de los siguientes medios.</p>
					<ul class="address">
						<li><img src="../images/pin.png">Av. Xalapa #1 <span>Xalapa,Veracruz.</span></li>
						<li><img src="../images/email.png"><a href="mailto:info@example.com">  chein@support.com</a></li>
						<li><img src="../images/call.png">+52 228 123 4564</li> 
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>MI PERFIL</h3>
					<ul class="info"> 
						<li><a href="checkout.php">Mi carrito</a></li>
					</ul>
					<h4>Siguenos</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
		</div>
	</div>	
<!-- //footer -->
</body>
</html>