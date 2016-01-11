<div id="sidebar">
	<div id="social-follower">
		<div id="separador-sidebar"></div>
			<div id="llamado"><h3>CONTACTO</h3></div>
		<div id="separador-sidebar"></div>
		<a href="https://www.facebook.com/hernanmdemczuk" target="_blank"><div id="fb-fol"><h3>FACEBOOK</h3></div></a>
		<a href="https://twitter.com/HMartin91" target="_blank"><div id="tw-fol"><h3>TWITTER</h3></div></a>
		<a href="https://www.youtube.com/user/hernanmartindemczuk" target="_blank"><div id="yt-fol"><h3>YOUTUBE</h3></div></a>
		<a href="https://github.com/hernandemczuk" target="_blank"><div id="gi-fol"><h3>GITHUB</h3></div></a>
		<a href="https://www.linkedin.com/in/hernandemczuk" target="_blank"><div id="li-fol"><h3>LINKEDIN</h3></div></a>
		<a href="mailto:contacto@hernanmartin.me" target="_blank"><div id="ma-fol"><h3>MAIL</h3></div></a>
	</div>
	<div id="categorias-2">
		<div id="separador-sidebar"></div>
		<h3>ETIQUETAS</h3>
		<div id="separador-sidebar"></div>
		<div id="categorias-contenido">
			<ul id="tags-list">
			<?php
			$tags = get_tags( array('orderby' => 'count', 'order' => 'DESC' ) );
			foreach ( (array) $tags as $tag ) {
			echo '<li><a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . ' (' . $tag->count . ' Entradas)</a></li>';
			?><div id="separador-sidebar"></div>
			<?php
			}
			?>
			</ul>    
		</div>
	</div>
	<div id="categorias">
		<?php
		$args = array(
  		'orderby' => 'id',
  		'parent' => 0,
  		'hide_empty' => 0
  		);
		$categories = get_categories( $args );
		foreach ( $categories as $category ) {
		echo '<div id="accesos-rapidos"><div id="separador-sidebar-2"></div><h3>' . strtoupper($category->name) . '</h3><div id="separador-sidebar"></div>';
		echo '<div id="ultimas-entradas-blog-contenido">';
			$latest_cat_post = new WP_Query( array('order' => DESC, 'posts_per_page' => 3, 'category__in' => $category));
			if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post(); ?>
			<div id="lista-accesos-rapidos">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a><div id="separador-sidebar"></div></div>
			<?php endwhile; endif; ?>
		</div></div>
		<?php } ?>
	</div>
	<div id="categorias">
		<div id="separador-sidebar"></div>
		<h3>CATEGORÍAS</h3>
		<div id="separador-sidebar"></div>
		<div id="categorias-contenido">
			<?php
			$args = array(
	  		'orderby' => 'id',
	  		'parent' => 0,
	  		'hide_empty' => 0
	  		);
			$categories = get_categories( $args );
			foreach ( $categories as $category ) {
			echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . ' (' . $category->count . ' Entradas)</a></li>';
			?><div id="separador-sidebar"></div>
			<?php
			}
			?>
		</div>
	</div>
</div>