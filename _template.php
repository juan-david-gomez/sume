<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<title>Sume</title>
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="css/nuestraEmpresa.css">
	<link rel="stylesheet" href="css/portafolioServisios.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/custom.css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
</head>
<body>
	<div id="wrap-contente" class="primary-color">
		<div class="top-bar">
			<div class="top-bar-left">
				<a href="/home">
				<ul class="menu"><li class="menu-text"><img class="post-icon" src="img/logo_index_black.jpg" alt="foundation icon" style="width: 70px;"></li></ul>
				</a>
			</div>
			<div class="title-bar hide-for-medium" data-responsive-toggle="menu-movil" data-hide-for="medium">
			  <button class="menu-icon toggle-menu" type="button" data-toggle="menu-movil"></button>
			  <div class="title-bar-title">Menu</div>
			</div>
			<div class="top-bar-right menu-movil hide-for-small-only" style="margin: 7px;">
				<ul class="menu vertical medium-horizontal">
					<li><a href="index.php">Home</a></li>
					<li><a href="nuestra-empresa.php">Nuestra empresa</a></li>
					<li><a href="portafolio-servicios.php">Portafolio de Servicios</a></li>
					<!-- <li><a href="#">Portafolio de Servicios</a></li> -->
					<li><a href="productos.php">Productos</a></li>
					<!-- <li><a href="#">Productos</a></li> -->
					<!-- <li><a href="/contactenos.php">Contáctenos</a></li> -->
					<li><a href="#">Contáctenos</a></li>
				</ul>
			</div>
		</div>
		<div id="main-content" >
			<?php echo isset($contenido)?$contenido:"" ?>
		</div>
	</div>



	<!-- Footer -->
	<footer class="footer">
	  <div class="row full-width">
	    <div class="small-7 medium-7 large-7 columns">
	      <!-- <i class="fi-mail"></i> -->
        	<p><strong>Teléfonos :</strong> 300 481 8019 - 300 235 0494</a>
        	<strong>Direccion :</strong> Calle 65B 80A 145 Medellín Colombia</a>
        	<strong>Email :</strong> gerencia@sume.com.co</a><br>
        	© 2016 Sume S.A.S. Todos los derechos reservados.
        	</p>

	    </div>
	    <div class="small-5 medium-5 large-5 columns">
	     <div class="row">
	     	<div class="small-12 medium-12 columns">
				<a href="#"><i class="fi-social-facebook small"></i></a>
				<a href="#"><i class="fi-social-twitter small"></i></a>
	     	</div>
	     
	     </div>	
	    </div>

	  </div>
	</footer>



<script data-main="js/app" src="bower_components/requirejs/require.js"></script>	


</body>
</html>
