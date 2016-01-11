	<!-- LLAMADO HEADER -->
	<?php get_header(); ?>



	<!-- EMPIEZA EL LOOP -->
	<?php while ( have_posts() ) : the_post(); ?>

	<div id="top-post">
		<div class="container">	
			<!-- ETIQUETAS -->
			<div class="etiquetas-post">
				<?php
				$args = array(
		  		'orderby' => 'id',
		  		'parent' => 0,
		  		'hide_empty' => 0
		  		);
				$categories = get_categories( $args );
				foreach ( $categories as $category ) {
				echo '<a href="' . get_category_link( $category->term_id ) . '"><h2>' . strtoupper($category->name) . ' </h2></a>';
				?>
				<?php
				}
				?>
			</div>
			<!-- TITULO -->	
			<a name="spot"><h1><?php the_title(); ?></h1></a>
			<!-- CONTACTO -->		
			<div id="perfil-post">
				<div id="imagen-post">
					<a href="http://about.me/hernandemczuk" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/perfil.jpg" alt="Hernan Demczuk"></a>
				</div>
				<ul id="contacto-post">
					<a href="mailto:contacto@hernanmartin.me" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/email-footer.png" alt="Email"></a>
					<a href="https://plus.google.com/u/0/+hernanmartindemczuk/posts" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/google-plus-footer.png" alt="Google+"></a>
					<a href="https://twitter.com/HMartin91" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/twitter-footer.png" alt="Twitter"></a>
					<a href="https://www.facebook.com/hernanmdemczuk" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/facebook-footer.png" alt="Facebook"></a>
				</ul>
			</div>	
		</div>
	</div>
	<div id="separ-index"></div>

	<!-- MAIN -->
	<div class="container">
		<div id="cuerpo">
			<div id="main">
				<div id="separador-post">
					<div class="separador-post-siguiente"></div>
						<a href="/"><div id="post-anterior-desktop">&laquo; INICIO</div></a>
					<div class="separador-post-siguiente"></div>
				</div>
				<div id="cuerpo-post">
					<div id="contenido-post">
						<div id="encabezado-de-post">
						</div>
						<div class="foro-content">
							<?php the_content(); ?>
						</div>
						<?php endwhile;wp_reset_query(); ?>
					</div>
					<div id="separador-post-b">
						<div class="separador-post-comentario"></div>
							<a href="/"><div id="post-anterior-desktop">&laquo; INICIO</div></a>
						<div class="separador-post-comentario"></div>
					</div>
				</div>
			</div>
			<!-- SIDEBAR -->
			<?php get_sidebar(); ?>
		</div>
	</div>

</div>

<!-- FOOTER -->

<?php get_footer(); ?>