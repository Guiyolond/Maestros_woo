<?php get_header(); ?>
    <article id="" class="container-fluid pl-0 pr-0">
      <div class="row">
      	<div class="col-12">
      		<?php
      			if( have_posts() ) {
      				while( have_posts() ) {
      					the_post();
      					get_template_part( 'template-parts/content-single', '' );
      				}

      			}
      			else {
      				get_template_part( 'template-parts/content', 'none' );
      			}
      		?>
      	</div>
      </div>
    </article>
    <div class="container">
        <div class="row">
          <div class="col-12">
            <?php comments_template(); ?>
          </div>
        </div>
    </div>

<?php get_footer(); ?>
