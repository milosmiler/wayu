<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		
			<div class="contacto-social">
				<div class="wrapper">
				<ul class="contacto">
					<li class="telefono">52924793</li>
					<li class="sobre-contacto"> <a href="#modal" name="modal">hola@wayuume.com </a> </li>
					<a href="<?php echo site_url('/preguntas/'); ?>"><li class="preguntas-frecuentes">preguntas frecuentes</li></a>
					<li class="whatsap">52 155 4351 9154</li>
				</ul>
				<div id="modal" class="modalwindow">
					<div class="pleca-azul">
   						<a href="#" class="close">X</a>
   					</div>
   					<section class="cuerpo-formulario">
   						<p> Para nosotros eres muy importante, en breve nos <br>
							pondremos en contacto contigo.
   						</p>	
   						<form action="http://www.pretechmobile.com/wayue/wp-content/themes/wayu/envio-form/envio.php" method="post">
   							<input type="text" name="nombre" class="formulario-modal" placeholder="Tu nombre" required>
   							<input type="text" name="email" class="formulario-modal" placeholder="email" required>
   							<input type="text" name="telefono" class="formulario-modal" placeholder="Telefono" required>
   							<textarea placeholder="Mensaje" name="mensaje" required>
   							</textarea>
   							<button class="btn-enviar-modal">Enviar</button>
   						</form>
   					</section>
				</div>
				<ul class="social">
					<a href="https://www.facebook.com/Wayuu-1570265936544314/?fref=ts" target="_blank"><li class="facebook"></li></a>
					<a href="https://twitter.com/wayuu_" target="_blank"><li class="twitter" ></li></a>
					<a href="https://www.instagram.com/wayuu_/" target="_blank"><li class="camara"></li></a>
					<!-- <a href=""><li class="youtube"></li></a> -->
					<a href="https://es.pinterest.com/wayuu_/" target="_blank"><li class="pinters"></li></a>
				</ul>
				</div>
			</div>
			<header>
				<div class="wrapper">
					<figure class="logo">
						<h1><a href="<?php echo SITEURL; ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Wayuuu" /></a></h1>
					</figure>
					<nav>
						<ul>
							<li><a href="<?php echo site_url('/nosotros/'); ?>">Nosotros</a></li>
							<li><a href="#actividades1">Ofrecemos</a></li>
							<li><a href="#wayu-corp">Wayuu Corp</a></li>
							<li><a href="#wayu-contruye">Wayu Solidario</a></li>
							<li><a href="<?php echo site_url('/blog/'); ?>">Blog</a></li>
							<!-- <li><a href="">TIENDA</a></li> -->
						</ul>
					</nav>
				</div>
			</header>
		
