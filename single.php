	<!-- LLAMADO HEADER -->
	<?php get_header(); ?>
    

	<!-- FACEBOOK -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- TWITTER -->
	<script>
	window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
	</script>
	<!-- GOOGLE+ -->
	<script src="https://apis.google.com/js/platform.js" async defer>
	  {lang: 'es'}
	</script>



	<!-- EMPIEZA EL LOOP -->
	<?php while ( have_posts() ) : the_post(); ?>

	<div id="top-post">
		<div class="container">
			<div id="posts-mobile">
				<div id="post-anterior"><?php previous_post('&laquo; %', 'ANTERIOR', '', 1000 ); ?></div>
				<div id="post-siguiente"><?php next_post('% &raquo; ', 'SIGUIENTE', '', 1000); ?></div>
			</div>			
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
			<h1><?php the_title(); ?></h1>
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
						<div id="post-anterior-desktop"><?php previous_post('&laquo; %', 'POST ANTERIOR', '', 1000 ); ?></div>
						<div id="post-siguiente-desktop"><?php next_post('% &raquo; ', 'SIGUIENTE POST', '', 1000); ?></div>
					<div class="separador-post-siguiente"></div>
				</div>
				<div id="cuerpo-post">
					<div id="contenido-post">
						<div id="encabezado-de-post">
							<div id="compartir-post">
								<!-- FACEBOOK -->
								<div class="fb-share-button" data-layout="box_count" ></a>></div>						
								<!-- LINKEDIN -->
								<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: es_ES</script>
								<script type="IN/Share" data-counter="top"></script>
								<!-- GOOGLE+ -->
								<div class="googleplus"><div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60" ></div></div>
								<!-- TWITTER -->
								<div class="twitter"><a class="twitter-share-button" href="https://twitter.com/share" size="medium" data-count="vertical"></a></div>
							</div>
							<div id="clear-titulo">
								<p>CATEGORÍAS >> <a href="<?php get_category_link( $category_id ); ?>"><?php the_category(', '); ?></a></p>
								<div id="fecha-autor">
									<p>por <a href="http://about.me/hernandemczuk" target="_blank"><?php the_author(', '); ?></a> el <?php the_time('d/m/Y'); ?> 
									</p>
								</div>
							</div>
						</div>
						<div id="content">
							<div class="thumbnail">
								<?php the_post_thumbnail();?>
							</div>
							<?php the_content(); ?>
						</div>
						<?php endwhile;wp_reset_query(); ?>
					</div>
					<div id="posts-mobile">
						<div id="post-anterior-fin"><?php previous_post('&laquo; %', 'ANTERIOR', '', 1000 ); ?></div>
						<div id="post-siguiente-fin"><?php next_post('% &raquo; ', 'SIGUIENTE', '', 1000); ?></div>
					</div>
					<div id="separador-mobile">
						<div class="separador-post-comentario"></div>
					</div>
					<div id="separador-post-b">
						<div class="separador-post-comentario"></div>
						<div id="post-anterior-desktop"><?php previous_post('&laquo; %', 'POST ANTERIOR', '', 1000 ); ?></div>
						<div id="post-siguiente-desktop"><?php next_post('% &raquo; ', 'SIGUIENTE POST', '', 1000); ?></div>
						<div class="separador-post-comentario"></div>
					</div>
					<div id="comentarios-titulo">
						<h3>DEJA TU COMENTARIO</h3>
						<p>Si quieres insertar código: &lt;pre&gt;&lt;code&gt; TU CÓDIGO &lt;/code&gt;&lt;/pre&gt;.</p>
					</div>
					<?php comments_template(); ?>
				</div>
			</div>
			<!-- SIDEBAR -->
			<?php get_sidebar(); ?>
		</div>
	</div>

</div>

<!-- FOOTER -->

<?php get_footer(); ?>