<?php 
//include("header.blade.php")
?>

@include('header')
<!-- banner -->
<div class="banner10" id="home1">
	<div class="container">
		<h2>Checkout</h2>
	</div>
</div>
<!-- //banner -->

<!-- breadcrumbs -->
<div class="breadcrumb_dress">
	<div class="container">
		<ul>
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
			<li>Checkout</li>
		</ul>
	</div>
</div>
<!-- //breadcrumbs -->

<!-- checkout -->
<div class="checkout">
	<div class="container">
		<h3>SU CARRITO DE COMPRAS TIENE: <span>3 Productos</span></h3>

		<div class="checkout-right">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>SL No.</th>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Nombre del producto</th>
						<th>Cargos de Servicio</th>
						<th>Precio</th>
						<th>Eliminar</th>
					</tr>
				</thead>

				@isset($Carrito)
				@foreach($Carrito as $prod)
				<tr class="{{$prod->id}}">
					<td class="invert">1</td>
					<td class="invert-image"><a href="single.html"><img src="images/{{ $prod-> ruta }}" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						<div class="quantity">
							<div class="quantity-select">
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">{{$prod->nombre}}</td>
					<td class="invert">$5.00</td>
					<td class="invert">{{$prod->precio}}</td>
					<td class="invert">
						<div class="rem">
							<div class="close1"> </div>
						</div>
						<script>
							$(document).ready(function(c) {
								$('.close1').on('click', function(c) {
									$('.rem1').fadeOut('slow', function(c) {
										$('.rem1').remove();
									});
								});
							});
						</script>
					</td>
				</tr>

				@endforeach
				@endisset
				<!--<tr class="rem1">
					<td class="invert">1</td>
					<td class="invert-image"><a href="single.html"><img src="images/j3.jpg" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						<div class="quantity">
							<div class="quantity-select">
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">Beige solid Chinos</td>
					<td class="invert">$5.00</td>
					<td class="invert">$200.00</td>
					<td class="invert">
						<div class="rem">
							<div class="close1"> </div>
						</div>
						<script>
							$(document).ready(function(c) {
								$('.close1').on('click', function(c) {
									$('.rem1').fadeOut('slow', function(c) {
										$('.rem1').remove();
									});
								});
							});
						</script>
					</td>
				</tr> -->
				<!--quantity-->
				<script>
					$('.value-plus').on('click', function() {
						var divUpd = $(this).parent().find('.value'),
							newVal = parseInt(divUpd.text(), 10) + 1;
						divUpd.text(newVal);
					});

					$('.value-minus').on('click', function() {
						var divUpd = $(this).parent().find('.value'),
							newVal = parseInt(divUpd.text(), 10) - 1;
						if (newVal >= 1) divUpd.text(newVal);
					});
				</script>
				<!--quantity-->
			</table>
		</div>
	

		<h3>Productos Apartados <span>1 Products</span></h3>

		<div class="checkout-right">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>SL No.</th>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Nombre del producto</th>
						<th>Cargos de Servicio</th>
						<th>Precio</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				@isset($Apartados)
				@foreach($Apartados as $prod)
				<tr class="{{$prod->id}}">
					<td class="invert">1</td>
					<td class="invert-image"><a href="single.html"><img src="images/{{ $prod-> ruta }}" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						<div class="quantity">
							<div class="quantity-select">
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">{{$prod->nombre}}</td>
					<td class="invert">$5.00</td>
					<td class="invert">{{$prod->precio}}</td>
					<td class="invert">
						<div class="rem">
							<div class="close1"> </div>
						</div>
						<script>
							$(document).ready(function(c) {
								$('.close1').on('click', function(c) {
									$('.rem1').fadeOut('slow', function(c) {
										$('.rem1').remove();
									});
								});
							});
						</script>
					</td>
				</tr>

				@endforeach
				@endisset
				<!-- <tr class="rem1">
					<td class="invert">1</td>
					<td class="invert-image"><a href="single.html"><img src="images/j3.jpg" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						<div class="quantity">
							<div class="quantity-select">
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">Beige solid Chinos</td>
					<td class="invert">$5.00</td>
					<td class="invert">$200.00</td>
					<td class="invert">
						<div class="rem">
							<div class="close1"> </div>
						</div>
						<script>
							$(document).ready(function(c) {
								$('.close1').on('click', function(c) {
									$('.rem1').fadeOut('slow', function(c) {
										$('.rem1').remove();
									});
								});
							});
						</script>
					</td>
				</tr>
						-->
				<!--quantity-->
				<script>
					$('.value-plus').on('click', function() {
						var divUpd = $(this).parent().find('.value'),
							newVal = parseInt(divUpd.text(), 10) + 1;
						divUpd.text(newVal);
					});

					$('.value-minus').on('click', function() {
						var divUpd = $(this).parent().find('.value'),
							newVal = parseInt(divUpd.text(), 10) - 1;
						if (newVal >= 1) divUpd.text(newVal);
					});
				</script>
				<!--quantity-->
			</table>
		</div>

		<div class="checkout-left">
			<div class="checkout-left-basket">
				<button type="button" style="cursor: pointer; border: 1px solid  transparent; background-color: transparent;" class="open-modal" data-open="modal1">
					<h4>Continuar con el pago</h4>
				</button>
				<ul>
					<li>Producto 1 <i>-</i> <span>$200.00 </span></li>
					<li>Producto 2 <i>-</i> <span>$270.00 </span></li>
					<li>Producto 3 <i>-</i> <span>$212.00 </span></li>
					<li>Cargos totales por servicio <i>-</i> <span>$15.00</span></li>
					<li>Total <i>-</i> <span>$697.00</span></li>
				</ul>
			</div>
			<div class="checkout-right-basket">
				<a href="products.html"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="w3l_related_products">
	<div class="container">
		<h3>Productos Relacionados</h3>
		<ul id="flexiselDemo2">
			<li>
				<div class="w3l_related_products_grid">
					<div class="agile_ecommerce_tab_left dresses_grid">
						<div class="hs-wrapper hs-wrapper3">
							<img src="images/ss1.jpg" alt=" " class="img-responsive">
							<img src="images/ss2.jpg" alt=" " class="img-responsive">
							<img src="images/ss3.jpg" alt=" " class="img-responsive">
							<img src="images/ss4.jpg" alt=" " class="img-responsive">
							<img src="images/ss5.jpg" alt=" " class="img-responsive">
							<img src="images/ss6.jpg" alt=" " class="img-responsive">
							<img src="images/ss7.jpg" alt=" " class="img-responsive">
							<img src="images/ss8.jpg" alt=" " class="img-responsive">
							<div class="w3_hs_bottom">
								<div class="flex_ecommerce">
									<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
						<h5><a href="single.html">Pink Flared Skirt</a></h5>
						<div class="simpleCart_shelfItem">
							<p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
							<p><a class="item_add" href="#">Agregar al carrito</a></p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3l_related_products_grid">
					<div class="agile_ecommerce_tab_left dresses_grid">
						<div class="hs-wrapper hs-wrapper3">
							<img src="images/ss2.jpg" alt=" " class="img-responsive">
							<img src="images/ss3.jpg" alt=" " class="img-responsive">
							<img src="images/ss4.jpg" alt=" " class="img-responsive">
							<img src="images/ss5.jpg" alt=" " class="img-responsive">
							<img src="images/ss6.jpg" alt=" " class="img-responsive">
							<img src="images/ss9.jpg" alt=" " class="img-responsive">
							<img src="images/ss7.jpg" alt=" " class="img-responsive">
							<img src="images/ss8.jpg" alt=" " class="img-responsive">
							<div class="w3_hs_bottom">
								<div class="flex_ecommerce">
									<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
						<h5><a href="single.html">Red Pencil Skirt</a></h5>
						<div class="simpleCart_shelfItem">
							<p class="flexisel_ecommerce_cart"><span>$432</span> <i class="item_price">$323</i></p>
							<p><a class="item_add" href="#">Agregar al carrito</a></p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3l_related_products_grid">
					<div class="agile_ecommerce_tab_left dresses_grid">
						<div class="hs-wrapper hs-wrapper3">
							<img src="images/ss3.jpg" alt=" " class="img-responsive">
							<img src="images/ss4.jpg" alt=" " class="img-responsive">
							<img src="images/ss5.jpg" alt=" " class="img-responsive">
							<img src="images/ss6.jpg" alt=" " class="img-responsive">
							<img src="images/ss7.jpg" alt=" " class="img-responsive">
							<img src="images/ss8.jpg" alt=" " class="img-responsive">
							<img src="images/ss9.jpg" alt=" " class="img-responsive">
							<img src="images/ss1.jpg" alt=" " class="img-responsive">
							<div class="w3_hs_bottom">
								<div class="flex_ecommerce">
									<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
						<h5><a href="single.html">Yellow Cotton Skirt</a></h5>
						<div class="simpleCart_shelfItem">
							<p class="flexisel_ecommerce_cart"><span>$323</span> <i class="item_price">$310</i></p>
							<p><a class="item_add" href="#">Agregar al carrito</a></p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3l_related_products_grid">
					<div class="agile_ecommerce_tab_left dresses_grid">
						<div class="hs-wrapper hs-wrapper3">
							<img src="images/ss4.jpg" alt=" " class="img-responsive">
							<img src="images/ss5.jpg" alt=" " class="img-responsive">
							<img src="images/ss6.jpg" alt=" " class="img-responsive">
							<img src="images/ss7.jpg" alt=" " class="img-responsive">
							<img src="images/ss8.jpg" alt=" " class="img-responsive">
							<img src="images/ss9.jpg" alt=" " class="img-responsive">
							<img src="images/ss1.jpg" alt=" " class="img-responsive">
							<img src="images/ss2.jpg" alt=" " class="img-responsive">
							<div class="w3_hs_bottom">
								<div class="flex_ecommerce">
									<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
						<h5><a href="single.html">Black Short</a></h5>
						<div class="simpleCart_shelfItem">
							<p class="flexisel_ecommerce_cart"><span>$256</span> <i class="item_price">$200</i></p>
							<p><a class="item_add" href="#">Agregar al carrito</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo2").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint: 480,
							visibleItems: 1
						},
						landscape: {
							changePoint: 640,
							visibleItems: 2
						},
						tablet: {
							changePoint: 768,
							visibleItems: 3
						}
					}
				});

			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
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
							<p><a class="item_add" href="#">Agregar al carrito</a></p>
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
<!-- //checkout -->
<!-- newsletter -->
<div class="newsletter">
	<div class="container">
		<div class="col-md-6 w3agile_newsletter_left">
			<h3>Newsletter</h3>
			<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
		</div>
		<div class="col-md-6 w3agile_newsletter_right">
			<form action="#" method="post">
				<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //newsletter -->
<?php
//include("footer.blade.php")
?>
@include('footer')
<!-- //footer -->
</body>

</html>
<div class="modal" id="modal1">
	<div class="modal-dialog">
		<header class="modal-header">
			Ingresa tus datos de pago
			<button class="close-modal" aria-label="close modal" data-close>
				✕
			</button>
		</header>
		<section class="modal-content" style="background: #ff9b05;">
			<form id="regForm" action="" method="POST">

				<!-- One "tab" for each step in the form: -->
				<div class="tab">Datos de tarjeta:
					<div class="card">
						<img src="https://seeklogo.com/images/V/VISA-logo-62D5B26FE1-seeklogo.com.png" class="logo-card">
						<label>Numero de tarjeta:</label>
						<input style="color:#fff" id="user" name="tarjeta" type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" min="1" max="9999999999999999" class="input cardnumber" placeholder="1234 5678 9101 1121">
						<script>
							var input = document.getElementById('user');
							input.addEventListener('input', function() {
								if (this.value.length > 12)
									this.value = this.value.slice(0, 16);
							})
						</script>
						<label>Nombre:</label>
						<input style="color:#fff" name="nombre" class="input name" placeholder="Edgar Pérez">
						<label class="toleft">CCV:</label>
						<input style="color:#fff" class="input toleft ccv" placeholder="321">
					</div>
				</div>
				<div class="tab">Datos de facturación:
					<label id="texto_nav1"></label>
					<div class="form-floating mb-3">
						<label for="floatingInput">Dirección</label>
						<input type="text" class="form-control" id="floatingInput" placeholder="Principal 123...">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Direccion 2</label>
						<input type="text" class="form-control" id="floatingInput" placeholder="Secundaria 123...">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Ciudad</label>
						<input type="text" class="form-control" id="floatingInput" placeholder="Veracruz">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Pais</label>
						<input type="text" class="form-control" id="floatingInput" placeholder="México">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">CP</label>
						<input type="text" class="form-control" id="floatingInput" placeholder="91000">
					</div>
				</div>


				<div class="tab">Dirección de envio:
					<div class="form-floating mb-3">
						<label for="floatingInput">Dirección</label>
						<input name="direccion1" type="text" class="form-control" id="floatingInput" placeholder="Principal 123...">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Direccion 2</label>
						<input name="direccion2" type="text" class="form-control" id="floatingInput" placeholder="Secundaria 123...">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Ciudad</label>
						<input name="ciudad" type="text" class="form-control" id="floatingInput" placeholder="Veracruz">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Pais</label>
						<input name="pais" type="text" class="form-control" id="floatingInput" placeholder="México">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">CP</label>
						<input name="cp" type="text" class="form-control" id="floatingInput" placeholder="91000">
					</div>
				</div>

				<div class="tab">Tu pago será procesado en un momento
					<p></p>
					<p></p>
					<p>El monto de tu pago es:</p>
					<h3>$697.00</h3>


				</div>

				<div class="position-relative">
					<div class="text-center">
						<br>
						<br>
						<button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior </button>
						<button type="button" id="nextBtn" onclick="nextPrev(1)"> Siguiente</button>
					</div>
				</div>

				<!-- Circles which indicates the steps of the form: -->
				<div style="text-align:center;margin-top:40px;">
					<span class="step"></span>
					<span class="step"></span>
					<span class="step"></span>
					<span class="step"></span>
				</div>

			</form>
		</section>
	</div>
</div>
<script>
	var tarjeta0 = document.getElementById('texto_nav1');
	var nombre0 = document.getElementById('texto_nav1');
	var direccion10 = document.getElementById('texto_nav1');
	var direccion20 = document.getElementById('texto_nav1');
	var ciudad0 = document.getElementById('texto_nav1');
	var pais0 = document.getElementById('texto_nav1');
	var cp0 = document.getElementById('texto_nav1');
	var status = document.getElementById('texto_nav1');

	function nextPrev() {
		product = document.getElementsByName("tarjeta")[0].value;
		nombre = document.getElementsByName("nombre")[0].value;
		direccion1 = document.getElementsByName("direccion1")[0].value;
		direccion2 = document.getElementsByName("direccion2")[0].value;
		ciudad = document.getElementsByName("ciudad")[0].value;
		pais = document.getElementsByName("pais")[0].value;
		cp = document.getElementsByName("cp")[0].value;
	};

	function imprimir() {
		document.write("<div><p>(nombre0)</p></div>");

	}
</script>

<style>
	/* RESET RULES 
–––––––––––––––––––––––––––––––––––––––––––––––––– */
	:root {
		--lightgray: #efefef;
		--blue: steelblue;
		--white: #fff;
		--black: rgba(0, 0, 0, 0.8);
		--bounceEasing: cubic-bezier(0.51, 0.92, 0.24, 1.15);
	}

	* {
		padding: 0;
		margin: 0;
	}

	a {
		color: inherit;
		text-decoration: none;
	}

	button {
		cursor: pointer;
		background: transparent;
		border: none;
		outline: none;
		font-size: inherit;
	}



	.btn-group {
		text-align: center;
	}

	.open-modal {
		font-weight: bold;
		background: var(--blue);
		color: var(--white);
		padding: 0.75rem 1.75rem;
		margin-bottom: 1rem;
		border-radius: 5px;
	}


	/* MODAL
–––––––––––––––––––––––––––––––––––––––––––––––––– */
	.modal {
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		display: flex;
		align-items: center;
		justify-content: center;
		padding: 1rem;
		background: var(--black);
		cursor: pointer;
		visibility: hidden;
		opacity: 0;
		transition: all 0.35s ease-in;
	}

	.modal.is-visible {
		visibility: visible;
		opacity: 1;
	}

	.modal-dialog {
		position: relative;
		max-width: 800px;
		max-height: 80vh;
		border-radius: 5px;
		background: var(--white);
		overflow: auto;
		cursor: default;
	}

	.modal-dialog>* {
		padding: 1rem;
	}

	.modal-header,
	.modal-footer {
		background: var(--lightgray);
	}

	.modal-header {
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	.modal-header .close-modal {
		font-size: 1.5rem;
	}

	.modal p+p {
		margin-top: 1rem;
	}


	/* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
	.page-footer {
		position: absolute;
		bottom: 1rem;
		right: 1rem;
	}

	.page-footer span {
		color: #e31b23;
	}


	/* If you like this, please check my blog at codedgar.com.ve */
	@import url('https://fonts.googleapis.com/css?family=Work+Sans');


	.card {
		background: #16181a;
		border-radius: 14px;
		max-width: 300px;
		display: block;
		margin: auto;
		padding: 60px;
		padding-left: 20px;
		padding-right: 20px;
		box-shadow: 2px 10px 40px black;
		z-index: 99;
	}

	.logo-card {
		max-width: 50px;
		margin-bottom: 15px;
		margin-top: -19px;
	}

	label {
		display: flex;
		font-size: 10px;
		color: white;
		opacity: .4;
	}

	input {
		font-family: 'Work Sans', sans-serif;
		background: transparent;
		border: none;
		border-bottom: 1px solid transparent;
		color: black;
		transition: border-bottom .4s;
	}

	input:focus {
		border-bottom: 1px solid #1abc9c;
		outline: none;
	}

	.cardnumber {
		display: block;
		font-size: 20px;
		margin-bottom: 8px;
	}

	.name {
		display: block;
		font-size: 15px;
		max-width: 200px;
		float: left;
		margin-bottom: 15px;
	}

	.toleft {
		float: left;
	}

	.ccv {
		width: 50px;
		margin-top: -5px;
		font-size: 15px;
	}

	.receipt {
		border-radius: 4px;
		padding: 5%;
		padding-top: 200px;
		max-width: 600px;
		display: block;
		margin: auto;
		margin-top: -180px;
		z-index: -999;
		position: relative;
	}

	.col {
		width: 50%;
		float: left;
	}

	.bought-item {
		background: #f5f5f5;
		padding: 2px;
	}

	.bought-items {
		margin-top: -3px;
	}

	.cost {
		color: #3a7bd5;
	}

	.seller {
		color: #3a7bd5;
	}

	.description {
		font-size: 13px;
	}

	.price {
		font-size: 12px;
	}

	.comprobe {
		text-align: center;
	}

	.proceed {
		position: absolute;
		transform: translate(300px, 10px);
		width: 50px;
		height: 50px;
		border-radius: 50%;
		background: #1abc9c;
		border: none;
		color: white;
		transition: box-shadow .2s, transform .4s;
		cursor: pointer;
	}

	.proceed:active {
		outline: none;
	}

	.proceed:focus {
		outline: none;
		box-shadow: inset 0px 0px 5px white;
	}

	.sendicon {
		filter: invert(100%);
		padding-top: 2px;
	}

	@media (max-width: 600px) {
		.proceed {
			transform: translate(250px, 10px);
		}

		.col {
			display: block;
			margin: auto;
			width: 100%;
			text-align: center;
		}
	}

	/* Style the form */
	#regForm {
		margin: 100px auto;
		width: 70%;
		min-width: 300px;
	}


	/* Hide all steps by default: */
	.tab {
		display: none;
	}

	/* Make circles that indicate the steps of the form: */
	.step {
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: #bbbbbb;
		border: none;
		border-radius: 50%;
		display: inline-block;
		opacity: 0.5;
	}

	/* Mark the active step: */
	.step.active {
		opacity: 1;
	}

	/* Mark the steps that are finished and valid: */
	.step.finish {
		background-color: #04AA6D;
	}
</style>
<script>
	const openEls = document.querySelectorAll("[data-open]");
	const closeEls = document.querySelectorAll("[data-close]");
	const isVisible = "is-visible";

	for (const el of openEls) {
		el.addEventListener("click", function() {
			const modalId = this.dataset.open;
			document.getElementById(modalId).classList.add(isVisible);
		});
	}

	for (const el of closeEls) {
		el.addEventListener("click", function() {
			this.parentElement.parentElement.parentElement.classList.remove(isVisible);
		});
	}

	document.addEventListener("click", e => {
		if (e.target == document.querySelector(".modal.is-visible")) {
			document.querySelector(".modal.is-visible").classList.remove(isVisible);
		}
	});

	document.addEventListener("keyup", e => {
		// if we press the ESC
		if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
			document.querySelector(".modal.is-visible").classList.remove(isVisible);
		}
	});



	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
		// This function will display the specified tab of the form ...
		var x = document.getElementsByClassName("tab");
		x[n].style.display = "block";
		// ... and fix the Previous/Next buttons:
		if (n == 0) {
			document.getElementById("prevBtn").style.display = "none";
		} else {
			document.getElementById("prevBtn").style.display = "inline";
		}
		if (n == (x.length - 1)) {
			document.getElementById("nextBtn").innerHTML = "Procesar";

		} else {
			document.getElementById("nextBtn").innerHTML = "Siguiente";

		}
		// ... and run a function that displays the correct step indicator:
		fixStepIndicator(n)
	}

	function nextPrev(n) {
		// This function will figure out which tab to display
		var x = document.getElementsByClassName("tab");
		// Exit the function if any field in the current tab is invalid:
		if (n == 1 && !validateForm()) return false;
		// Hide the current tab:
		x[currentTab].style.display = "none";
		// Increase or decrease the current tab by 1:
		currentTab = currentTab + n;
		// if you have reached the end of the form... :
		if (currentTab >= x.length) {
			//.. final del formulario de pago:
			document.getElementById("regForm").submit();
			//animacion de envio
			Swal.fire({
				icon: 'success',
				title: 'Tu pago se encuentra en proceso de validación',
				showConfirmButton: false,
				timer: 15500
			})
			//vaciar carrito
			document.getElementById("vaciar").click();
			//redireccionar pagina
			window.location = "/";
			return false;

		}
		// Otherwise, display the correct tab:
		showTab(currentTab);
	}

	function validateForm() {
		// This function deals with validation of the form fields
		var x, y, i, valid = true;
		x = document.getElementsByClassName("tab");
		y = x[currentTab].getElementsByTagName("input");
		// A loop that checks every input field in the current tab:
		for (i = 0; i < y.length; i++) {
			// If a field is empty...
			if (y[i].value == "") {
				// add an "invalid" class to the field:
				y[i].className += " invalid";
				// and set the current valid status to false:
				valid = false;
			}
		}
		// If the valid status is true, mark the step as finished and valid:
		if (valid) {
			document.getElementsByClassName("step")[currentTab].className += " finish";

		}
		return valid; // return the valid status
	}

	function fixStepIndicator(n) {
		// This function removes the "active" class of all steps...
		var i, x = document.getElementsByClassName("step");
		for (i = 0; i < x.length; i++) {
			x[i].className = x[i].className.replace(" active", "");
		}
		//... and adds the "active" class to the current step:
		x[n].className += " active";
	}
</script>
