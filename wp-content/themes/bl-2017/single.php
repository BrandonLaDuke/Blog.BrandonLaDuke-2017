<?php get_header(); ?>
<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
  <section id="active-post">
    <div class="post-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
      <div class="post-title-container">
        <h1 class="post-title"><?php single_post_title(); ?></h1>
        <h3 class="post-date"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></h3>
        <h4 class="post-author">By <?php the_author_posts_link(); ?></h4>
      </div>
    </div>
    <div class="post-body">
      <div class="post-content">
        <?php the_content() ?>
        <div id="disqus_thread"></div>
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://blog-brandonladuke.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

      </div>
      <div class="post-ads">

        

      </div>
    </div>
  </section>


				<?php
					endwhile; endif;
				?>


<?php get_footer(); ?>
