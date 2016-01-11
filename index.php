	<!-- LLAMADO HEADER -->
	<?php get_header(); ?>

	<div id="top-index">
		<div class="container">
	<!-- ETIQUETAS -->
			<div class="etiquetas">
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
			<div id="container-titulo-index">
			</div>
			<div id="perfil">
				<div id="imagen">
					<a href="http://about.me/hernandemczuk" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/perfil.jpg" alt="Hernan Demczuk"></a>
				</div>
				<ul id="contacto">
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
				<!-- EMPIEZA EL LOOP -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div id="post">
							<div id="encabezado-post">
								<p>CATEGORÍAS >> <?php the_category(', '); ?></p>
								<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title() ;?></a></h2>	
								<div id="fecha-autor">
									<p>por <a href="http://about.me/hernandemczuk" target="_blank"><?php the_author(', '); ?></a> el <?php the_time('d/m/Y'); ?> 
									</p>
								</div>
							</div>
							<div class="thumbnail"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail();?></a></div>
							<div class="post-p">
								<?php the_excerpt(',');?>
								<div id="tag_excerpt">
									<?php the_tags();?>
								</div>
							</div>
						</div>
						<div class="separador-post"></div>
					<?php endwhile; ?>
					<div class="paginacion"><p><?php posts_nav_link(' / ','POSTS MÁS RECIENTES','POSTS MÁS ANTIGUOS'); ?></p></div>
				<?php endif; ?>
			</div>
			<!-- SIDEBAR -->
			<?php get_sidebar(); ?>
		</div>
	</div>

</div>

<!-- FOOTER -->

<?php get_footer(); ?>