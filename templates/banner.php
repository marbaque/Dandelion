
<header class="jupa">
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0]; ?>
	<?php endif; ?>
		
		<div class="image-top" style="background-image: url('<?php echo $image; ?>')" >
			
		      <div class="container"><h1 class="entry-title"><?php the_title(); ?></h1></div>

		</div><!-- end #category-name -->

</header> 
