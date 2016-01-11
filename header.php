<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
	    <title><?php wp_title(); ?></title>
	    <link rel="stylesheet" type="text/css" href="/wp-content/themes/responsive-blog-by-hernan-demczuk/estilos/normalize.css">
	    <link rel="stylesheet" type="text/css" href="/wp-content/themes/responsive-blog-by-hernan-demczuk/estilos/fonts.css">
	    <link rel="stylesheet" type="text/css" href="/wp-content/themes/responsive-blog-by-hernan-demczuk/style.css">
		<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
	    <link rel="shortcut icon" href="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/favicon.png" type="image/x-icon" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<?php wp_head(); ?>

    </head>

	<body>


<!-- HEADER -->

		<header>
			<div id="container-header">
				<div class="container"> <!-- CONTAINER PARA CENTRAR TODO -->
					<a href="/"><div id="container-logo"></div></a>
					<nav>
						<ul>
							<li>
								<div id="container-busqueda">
									<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
										<div id="container-caja-busqueda">
		      								<input type="text" id="caja-busqueda" placeholder="¿Buscas algo? Fijate acá..." value="<?php the_search_query(); ?>" name="s" id="s" />
		  								</div>
	  									<button type="submit" class="icon-only" id="container-boton-busqueda"></button>
	  								</form>
								</div>
							</li>
							<li>
								<div id="container-boton-menu"></div>
								<ul>
									<li><a href="/"><h3>INICIO</h3></a></li>
									<?php
									$args = array(
							  		'orderby' => 'id',
							  		'parent' => 0,
							  		'hide_empty' => 0
							  		);
									$categories = get_categories( $args );
									foreach ( $categories as $category ) {
									echo '<li><a href="' . get_category_link( $category->term_id ) . '"><h3>' . strtoupper($category->name) . ' </h3></a></li>';
									?>
									<?php
									}
									?>
								</ul>
							</li>
							<li>
								<a href="https://www.youtube.com/user/hernanmartindemczuk" target="_blank"><div id="container-boton-youtube"></div></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

<!-- INDEX -->

		<div id="container-general">