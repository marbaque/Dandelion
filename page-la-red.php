
		<?php 
			if ( has_post_thumbnail() ) {
				?>
				<header class="jupa">
		<?php 
				the_post_thumbnail();
				global $post;
	
				$thumbnail_id    = get_post_thumbnail_id($post->ID);
				$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
				
			  if ($thumbnail_image && isset($thumbnail_image[0])) {
			    echo '<div class="fuente2">'.$thumbnail_image[0]->post_excerpt.'</div>';
			  }
				?>
				<div class="container"><div class="row"><div class="col-md-8 col-md-offset-2">
				<h2 class="red-title">Red de Investigación</h2>

	
			
			</div></div></div>
		</header> 
		<?php 
			} 
			?>
	


<div class="content">
	<?php while (have_posts()) : the_post(); ?>
		<div class="col-md-8 col-md-offset-2 la-red">
			<div class="in-red">
				<?php get_template_part('templates/page', 'header'); ?>
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>
	<?php endwhile; ?>
</div>
