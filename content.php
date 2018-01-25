<article <?php post_class(); ?>>

    <?php if (the_post_thumbnail()) the_post_thumbnail(); ?>

    <div class="article-content">
      <h1 class="blog-post-title"><?php the_title(); ?></h1>
      <div class="blog-all-content">
        <p class="blog-post-meta"><?php the_time('F j, Y') ?></p>
        
        <div class="blog-text-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </article>