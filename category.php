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
			<div id="categoria-titulo"><h1><?php single_cat_title()?></h1></div>
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
				<div id="cuerpo-category">
					<div class="separador-post-category"></div>
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts($query_string . '&showposts=28&paged=' . $paged); // Muestra 28 posts
					?>
					<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
					<div id="post-category">
						<div class="thumbnail-category"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail();?></a></div>
						<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title() ;?></a></h2>
						<div class="separador-post-category"></div>
					</div>
					<?php
					endwhile;
					else :?>
					<?php endif;
					?>
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