<?php get_header(); ?>
    <article id="" class="container">
      <div class="row pt-5 pl-5 pr-5">
      	<div class="col-sm-12">
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
      <div class="row p-5">
        <div class="col-12">
          <?php comments_template(); ?>
        </div>
      </div>
    </article>
<?php get_footer(); ?>
