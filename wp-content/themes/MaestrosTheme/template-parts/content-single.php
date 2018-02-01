<div class="d-flex justify-content-center">
	<div class="">
		<?php
		if (has_post_thumbnail()){
						the_post_thumbnail();
		}
		?>
	</div>
	<h1 class="pl-3 text-center"><?php the_title() ?></h1>
</div>

<div class="content">
	<?php the_content() ?>
</div>
