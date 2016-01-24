<?php while (have_posts()) : the_post(); ?>
		<header role="banner">
			<div class="container-fluid jupa-noticias">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php get_template_part('templates/noticias', 'header'); ?>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<?php get_template_part('templates/content', 'page'); ?>
  
<?php endwhile; ?>
