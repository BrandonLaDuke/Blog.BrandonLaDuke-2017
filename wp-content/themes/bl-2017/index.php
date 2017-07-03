<?php get_header(); ?>
    <span id="post-label">Recent Posts</span>
    <section id="recent-posts">
      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
      ?>

      <a href="<?php the_permalink(); ?>" id="" class="post-card"
      onmouseover="showExcerpt()"
      onmouseleave="hideExcerpt()" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
        <!--Text appears overtop of the post image-->
        <h2 class="post-title"><?php the_title(); ?></h2>
        <div class="post-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
        <div class="post-shim">
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
        </div>
      </a>

      <?php
        endwhile;
        endif;
      ?>
    </section>

<?php get_footer(); ?>
