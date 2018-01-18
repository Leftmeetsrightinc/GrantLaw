<article>

    <?php if (the_post_thumbnail()) the_post_thumbnail(); ?>

    <div class="blog-content">
      <h1 class="blog-post-title"><?php the_title(); ?></h1>
      <div class="blog-all-content">
        <p class="blog-post-meta"><?php the_time('F j, Y') ?>
        <!-- by <a href="#"><?php the_author(); ?></a> -->
        <div class="blog-text-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </article>