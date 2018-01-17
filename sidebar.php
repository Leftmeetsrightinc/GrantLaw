<aside class="blog-sidebar">

	<?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) :
	  endif;
	?>
</aside><!-- /.blog-sidebar -->
<?php get_footer(); ?>