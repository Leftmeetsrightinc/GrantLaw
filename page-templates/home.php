<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>
	<div class="home row">
	
	<div class="blog-post">
	
	<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

		endwhile; endif; 
	?>
	
	</div><!-- /.blog-main -->
	
	</div><!-- /.row -->
<?php get_footer(); ?>