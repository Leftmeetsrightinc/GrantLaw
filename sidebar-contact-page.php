<aside class="blog-sidebar contact-page-sidebar">

	<?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contact-page') ) :
	  endif;
	?>
</aside><!-- /.blog-sidebar -->
<?php get_footer(); ?>