<!DOCTYPE html>
<html>
<!-- head -->
<head>
<title>Camisas</title>
<!-- for-mobile-apps -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
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
<!-- //head -->

<body>
<!-- header -->
<!-- header -->
<div class="modal fade" id="myModal882" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div>
					<form action="/" method="get">
						<input type="submit"  value="Cerrar Sesion" />
					</form>
				</div>
				<div>
					@isset($nombre)
					<a href="perfil?variable=<?php echo urlencode($nombre);?>">Ver mi Perfil</a>
					<?php echo $nombre; ?>
					@endisset
				</div>				
			</div>
		</div>
	</div>
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
												<form action="/camisas" method="post">
													@csrf			
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

												<form action="/camisas" method="post">			
													@csrf
													<input placeholder="Nombre" name="Name" type="text" required="">
													<input placeholder="Email" name="Email" type="email" required="">	
													<input placeholder="Contraseña" name="	" type="password" required="">	
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
	
	@empty($nombre)
	
	<script>
		$('#myModal88').modal('show');
	</script>
	@endempty
	<div class="header">
		<div class="container">
			@empty($nombre)
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><img src="../images/user.png"/></a>
			</div>
			@endempty
			@isset($nombre)
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal882"><img src="../images/user.png"/></a>
			</div>
			<div class='w31_login'>
				<p>{{$nombre}}</p>
			</div>
			 
			@endisset
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
            	<a href="/carrito">
                	<div class="total">
                    	<span class="simpleCart_total"></span> (<span id="simpleCart_quantity"
                        	class="simpleCart_quantity"></span> artículos)
                	</div>
                	<img src="../images/bag.png" alt="" />
            	</a>
            	<p><a href="javascript:;" id="vaciar" class="simpleCart_empty">Carrito vacío</a></p>
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
						@include('menuPrendas')						
						<!--FIN MEGAMENU-->
						<li><a href="about">Acerca de nosotros</a></li>						
					</ul>
				</div>
			</nav>
		</div>
	</div><!-- //header -->
<!-- //header -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"> <img src="images/home.png" width="15%"/> Inicio </a> <i>/</i></li>
				<li>Camisas</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- dresses -->
	<div class="dresses">
		<div class="container">
			<div class="w3ls_dresses_grids">
				
				<div class="col-md-8 w3ls_dresses_grid_right">

					<div class="clearfix"> </div>

					<div class="w3ls_dresses_grid_right_grid3">
						@isset($productos)
						@foreach($productos as $producto)
						
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">

							<div class="agile_ecommerce_tab_left dresses_grid">
								<!-- imagen -->
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
									<img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
									<img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
									<img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
									<img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
									<img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
									<img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
									<img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />

									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal{{$producto-> id}}"><span class="glyphicon" aria-hidden="true"><img src="../images/eye-open.png"/></span></a>
											</li>
										</ul>
									</div>								
								</div>	
								<h5><a href="#">{{ $producto-> nombre  }}</a></h5>
								<div class="simpleCart_shelfItem">
									<!-- precio -->
									<p><span>$320</span> <i class="item_price">$ {{$producto-> precio }}</i></p>

									<!-- PRUEBA -->
									
								<script>
									function agregarProd(id,email) {
										var dataString = {"iD":id,"_token": $("meta[name='csrf-token']").attr("content")};
										$.ajax({
											type: "POST",
											url: "{{ url('cagregarCarrito') }}",
											data: dataString,
											success: function(messaje) {
												window.alert(messaje);
												if(messaje == "1"){
													window.alert("Se agrego con exito");
												}else if(messaje == "2"){
													window.alert("ya esta agregado");
												}else if(messaje == "0"){
													window.alert("No se agrego el producto");
												}else if(messaje == "3"){
													window.alert("Se agrego 1 mas al producto");
												}
											}
										});
									}

									function apartarProd(id,email) {
										var dataString = {"iD":id,"_token": $("meta[name='csrf-token']").attr("content")};
										$.ajax({
											type: "POST",
											url: "{{ url('capartarProd') }}",
											data: dataString,
											success: function(messaje) {
												if(messaje == "1"){
													window.alert("Se aparto con exito");
												}else if(messaje == "2"){
													window.alert("ya esta apartado");
												}else if(messaje == "2-1"){
													window.alert("ya existe pero se aparto");
												}else if(messaje == "0"){
													window.alert("No se aparto el producto");
												}
											}
										});
									}
								</script>







									<!-- FINPRUEBA -->


									<form>
									@csrf
										<p><a onclick="agregarProd({{$producto->id}});">Agregar al carrito</a></p>	
									</form>
									<form>
										<p><a onclick="apartarProd({{$producto->id}});">Apartar Producto</a></p>
									</form>	
									
								</div>
							</div>
						</div> 
						@endforeach
						@endisset

						@foreach($productos as $producto)
						<div class="modal video-modal fade" id="myModal{{$producto-> id}}" tabindex="-1" role="dialog" aria-labelledby="myModal6">
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
												
												<p>
												Stock disponible: {{ $producto-> stock  }} piezas
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