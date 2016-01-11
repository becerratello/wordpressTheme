<!-- LLAMADO HEADER -->
	<?php get_header(); ?>

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
			<h1>RESULTADOS DE BÚSQUEDA</h1>
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
				<div id="cuerpo-search">
					<div class="separador-post-search"></div>

					<?php if ( have_posts() ): ?>
					<h2>POSTS QUE CONTIENEN A: '<?php echo get_search_query(); ?>'</h2> 
					<ol>
					<?php while ( have_posts() ) : the_post(); ?>
					    <li>
				            <h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				            <time datetime="<?php the_time('d/m/Y'); ?>" pubdate><?php the_time('d/m/Y'); ?></time>
				            <?php the_excerpt(',');?>
					    </li>
					    <div class="separador-post-busqueda"></div>
					<?php endwhile; ?>
					</ol>
					<?php else: ?>
					<h2>No se encuentran resultados para: '<?php echo get_search_query(); ?>'</h2>
					<?php endif; ?>
					
					<div class="paginacion"><p><?php echo paginate_links( array( 'prev_text' => __('« ANTERIOR '), 'next_text' => __(' SIGUIENTE »'))); ?></p></div>
				</div>
			</div>
			<!-- SIDEBAR -->
			<?php get_sidebar(); ?>
		</div>
	</div>

</div>

<!-- FOOTER -->

<?php get_footer(); ?>