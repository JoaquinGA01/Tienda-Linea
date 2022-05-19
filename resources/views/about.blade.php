<!DOCTYPE html>
<html>
<head>
<title>Acerca de Nosotros | CHEIN</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="./css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="./js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
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
@include('header')
<!-- //header -->
<!-- banner -->
	<div class="banner10" id="home1">
		<div class="container">
			<h2>Acerca de Nosotros</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Acerca de Nosotros</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- about -->
	<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-6 w3ls_about_grid_left">
					<p>CHEIN - Ropa para todos</p>

					<div class="col-xs-10 w3ls_about_grid_left2">
						<p> Realizamos nuestras con mucho amor para ti, siempre procuramos ofrecerte la mejor calidad posible. Por que eres nuestro mejor amigo,
							nustro mejor cliente.
						</p>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3ls_about_grid_right">
					<img src="images/77.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->

<!-- footer -->
@include('footer')
<!-- //footer -->

</body>
</html>