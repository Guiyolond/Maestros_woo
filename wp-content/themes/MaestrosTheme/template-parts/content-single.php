<div class="d-flex justify-content-center bg-signos pt-3 pb-5">
	<div class="">
		<?php
		if (has_post_thumbnail()){
						the_post_thumbnail();
		}
		?>
	</div>
	<h1 class="pl-3 text-center text-white"><?php the_title() ?></h1>
</div>
<div class="content container">
	<?php the_content() ?>
</div>
