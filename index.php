<?php get_header(); ?>
	<div class="default blog row">
	
	<div class="blog-main">

		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
		?>
	
	</div><!-- /.blog-main -->
	
	<?php get_sidebar(); ?>
	
	</div><!-- /.row -->
<?php get_footer(); ?>