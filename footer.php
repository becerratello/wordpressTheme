		<footer>
			<div id="container-footer">
				<div class="container">
					<!-- COPYRIGHT -->
					<div id="copyright-celular">
			    		<p>Theme desarrollado por <a href="http://about.me/hernandemczuk" target="_blank">Hernan Martin Demczuk</a></p>
			    	</div>
					<!-- LINKS SOCIALES -->
			    	<div id="social-footer">
		    			<ul>
		    				<li>
		    					<a href="mailto:contacto@hernanmartin.me" target="_blank"><div id="email-footer"></div></a>
		    				</li>
		    				<li>
		    					<a href="http://plus.google.com/u/0/+hernanmartindemczuk/posts" target="_blank"><div id="google-plus-footer"></div></a>
		    				</li>
		    				<li>
		    					<a href="https://twitter.com/HMartin91" target="_blank"><div id="twitter-footer"></div></a>	
		    				</li>
		    				<li>
		    					<a href="https://www.facebook.com/hernanmdemczuk" target="_blank"><div id="facebook-footer"></div></a>	
		    				</li>
		    			</ul>
		    		</div>
		    		<!-- COPYRIGHT -->
					<div id="copyright">
			    		<p>Theme desarrollado por <a href="http://about.me/hernandemczuk" target="_blank">Hernan Martin Demczuk</a></p>
			    	</div>
	    		</div>
	    	</div>
	    </footer>
<?php wp_footer(); ?>

<div class="scroll-top-wrapper">
	<span class="scroll-top-inner">
		<i class="fa fa-arrow-up"></i>
	</span>
</div>

<!-- Script para boton de scroll cuando esta en mobile -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
 
$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
});
</script>

<script>
 
$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>


    </body>
</html>
