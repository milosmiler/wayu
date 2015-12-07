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
					<li class="telefono">044 55 52924793</li>
					<a href="#miModal"><li class="sobre-contacto">hola@wayuume.com</li></a>
					<li class="preguntas-frecuentes">preguntas frecuentes</li>
					<li class="whatsap">52 155 4351 9154</li>
				</ul>
				<div id="miModal" class="modal">
  					<div class="modal-contenido">
    					<a href="#">X</a>
    					<h2>Mi primer Modal</h2>
    					<label>Nombre:</label>
    					<input type="text">
    					<label>Telefono:</label>
    					<input type="text">
    					<label>Email:</label>
    					<input type="email">
    					<label>Mensaje:</label>
    					<textarea></textarea>
    					<button>Enviar</button>
  					</div>  
				</div>
				<ul class="social">
					<a href="https://www.facebook.com/Wayuu-1570265936544314/?fref=ts"><li class="facebook"></li></a>
					<a href="https://twitter.com/wayuu_"><li class="twitter"></li></a>
					<a href="https://www.instagram.com/wayuu_/"><li class="camara"></li></a>
					<a href=""><li class="youtube"></li></a>
					<a href="https://es.pinterest.com/wayuu_/"><li class="pinters"></li></a>
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
							<li><a href="">NOSOTROS</a></li>
							<li><a href="">OFRECEMOS</a></li>
							<li><a href="">WAYUU CORP</a></li>
							<li><a href="">WAYU CONSTRUYE</a></li>
							<li><a href="blog">BLOG</a></li>
							<li><a href="">TIENDA</a></li>
						</ul>
					</nav>
				</div>
			</header>
		
