<article <?php post_class(); ?>>

  <div class="article-content">
    <?php if (the_post_thumbnail()) the_post_thumbnail(); ?>

    <span class="photo-credit">Photo credit: <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></span>

    <?php if (!is_front_page()) : ?>
    <h1 class="blog-post-title"><?php the_title(); ?></h1>
    <?php endif; ?>
    <div class="blog-all-content">
      <p class="blog-post-meta"><?php the_time('F, Y') ?></p>

      <div class="blog-text-content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>