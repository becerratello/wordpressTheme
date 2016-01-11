<?php

/* FUNCIONES NECESARIAS */

/* Función para determinar texto maximo en las intro de los posts en el index */

function custom_excerpt_length( $length ) {
return 40; //Cambiar por la cantidad de palabras a mostrar
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/* Funcion para agregar el link 'mas' para ir al post */

function custom_excerpt_more($more) {
global $post;
return '<a class="more-link" href="'. get_permalink($post->ID) . '">'. __(' ...más!') .'</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');
add_theme_support( 'post-thumbnails' );
 
/* Funcion para editar el titulo del index */
 
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( get_bloginfo( 'title' ), 'textdomain' ) . ' | ' . get_bloginfo( 'description' ); 
  }
  return $title;
}
add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );


/* FIN FUNCIONES NECESARIAS */






/* FUNCIONES OPCIONALES PARA AGREGAR DENTRO DE LAS ENTRADAS */

/* Funcion para agregar al final de cada entrada para mostrar otras entradas de una categoria determinada */

function posts_categoria($atts){
	$atts = shortcode_atts(
		array(
			'categoria' => 1,
			'entradas' => 10
		), $atts);
 $q = new WP_Query(
   array( 'orderby' => 'date', 'posts_per_page' => $atts['entradas'],  'cat' => $atts['categoria']) 
 );
$list = '<div id="content"><div class="lista-post-final"><p><strong>ÚLTIMOS POSTS DE ESTA CATEGORÍA</strong><ul>'; 
while($q->have_posts()) : $q->the_post();
$list .= '<li>' . '<a href="' . get_permalink() . '">' . get_the_title() . '</a>' . '<br />' . '</li>';
endwhile;
wp_reset_query();
return $list . '</ul></div></p></div>';
}
add_shortcode('posts-categoria', 'posts_categoria');



/* Funcion para agregar al final de cada entrada para mostrar otras entradas de una etiqueta determinada */

function posts_etiqueta($atts){
	$atts = shortcode_atts(
		array(
			'etiqueta' => 1,
			'entradas' => 10
		), $atts);
 $q = new WP_Query(
   array( 'orderby' => 'date', 'order' => ASC, 'posts_per_page' => $atts['entradas'], 'tag__in' => array($atts['etiqueta'])) 
 );
$list = '<div id="content"><div class="lista-post-final"><p><strong>ULTIMOS POSTS DE ESTA ETIQUETA</strong><ul>';
while($q->have_posts()) : $q->the_post();
 $list .= '<li>' . '<a href="' . get_permalink() . '">' . get_the_title() . '</a>' . '<br />' . '</li>';
endwhile;
wp_reset_query();
return $list . '</ul></div></p></div>';
}
add_shortcode('posts-etiqueta', 'posts_etiqueta');



/* Función para agregar al final de cada entrada para mostrar todas las etiquetas de esa entrada */

function etiquetas_post($atts) {   
global $post;
$tags = '<div class="etiquetas-entrada"><strong>ETIQUETAS:</strong> <span class="post-tags"></div>';
ob_start();
the_tags( '<div class="etiquetas-entrada"><strong>ETIQUETAS:</strong> <span class="post-tags">', ', ', '</span></div>' );
$tags = ob_get_contents();
ob_end_clean();
return $tags;
}
add_shortcode ('etiquetas-post', 'etiquetas_post');


/* Funcion para agregar al final de cada entrada para mostrar una descripcion del autor de la entrada */

function autor_post( $atts ){
$autor = '&nbsp;
<div id="autor-post">
<div id="autor-imagen"><a href="http://about.me/hernandemczuk" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/perfil.jpg" alt="foto perfil"></a></div>
<div id="autor-info">
<div id="autor-bio">
<h3>ACERCA DEL AUTOR</h3>
<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</p></div>
<div id="autor-social"> 
<li><a href="mailto:contacto@hernanmartin.me" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk//images/email-footer.png" alt="Email"></a></li>
<li><a href="https://plus.google.com/u/0/+hernanmartindemczuk/posts" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/google-plus-footer.png" alt="Google+"></a></li>
<li><a href="https://twitter.com/HMartin91" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/twitter-footer.png" alt="Twitter"></a></li>
<li><a href="https://www.facebook.com/hernanmdemczuk" target="_blank"><img src="/wp-content/themes/responsive-blog-by-hernan-demczuk/images/facebook-footer.png" alt="Facebook"></a></li>
</div>
</div>
</div>
&nbsp;';
return $autor;
}
add_shortcode( 'autor-post', 'autor_post' );



/* Funcion para agregar al final de cada entrada para mostrar botones de compartir */

function share_social( $attas){
$social = '
<div id="compartir-post-2">
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
';
return $social;
}
add_shortcode( 'share-social', 'share_social' );

?>