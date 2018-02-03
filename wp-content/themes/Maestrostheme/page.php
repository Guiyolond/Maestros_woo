<?php get_header('back') ?>
<article class="mt-5 container pt-5 pb-5">
    <?php  if(have_posts()) :
      while(have_posts()) :
        the_post();
          ?>
          <div class="row">
              <div class="col-12">
                <h1><?php the_title(); ?></h1>
              </div>
              <div class="col-12">
                    <?php the_content(); ?>
              </div>
          </div>
      <?php endwhile ?>
    <?php endif; wp_reset_postdata(); ?>
</article>
<?php get_footer(); ?>
