<div class="content">
	<?php while (have_posts()) : the_post(); ?>
		<div class="col-md-8 col-md-offset-2">
			<?php get_template_part('templates/page', 'header'); ?>
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
	<?php endwhile; ?>
</div>
