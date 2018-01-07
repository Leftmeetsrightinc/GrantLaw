<aside class="col-sm-3 blog-sidebar">

	<?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) :
	  endif;
	?>
	
	<div class="sidebar-module sidebar-module-inset">
		<h4>About</h4>
		<p><?php the_author_meta( 'description' ); ?> </p>
	</div>
	<div class="sidebar-module">
		<h4>Archives</h4>
		<ol class="list-unstyled">
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ol>
	</div>
</aside><!-- /.blog-sidebar -->
<?php get_footer(); ?>