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
			<h1>ERROR 404 &raquo;<br>PÁGINA NO ENCONTRADA</h1>	
		</div>
	</div>

<!-- FOOTER -->

<?php get_footer(); ?>