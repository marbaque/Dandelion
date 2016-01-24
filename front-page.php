<div id="fullpage">
	
<!--
	<div class="section red">
		<h2 class="maintitle">Red de Investigación</h2>
		<div class="col-sm-4 col-sm-offset-4">
			<a href="/acerca-de">Acerca de</a>
		</div>
	</div>
-->
	<?php
	/* 
	 * Display all the 'proyects' post type
	 * Fullpage.js is used for the fullsize sections
	 */
	
	$args = array( 
	    'post_type' => 'proyectos', 
	    'posts_per_page' => -1,
	    'orderby' => 'title'
	);

	$proyectos = new WP_Query( $args );

		
	while ( $proyectos->have_posts() ) : $proyectos->the_post();
		//Find the featured image of the post
		if (has_post_thumbnail( $post->ID ) ){
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'lrg_size' );
			$image = $image[0];
			$image_id = get_post_thumbnail_id($post->ID);
			$alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
		}
    //echo '<div class="proyecto section" style=background-image:url(' . $image . ')>';
    echo '<div class="proyecto section">';
    echo '<div class="img"><img src="' . $image . '"></div>';
    echo '<div class="container">';
    echo "<div class=\"card col-sm-6 col-md-5 col-lg-4\">";
    echo "<a href='" . get_permalink() . "'><h2 class=\"entry-title\">" . get_the_title() . "</h2></a>";
    echo "<div class=\"entry-content\">";
    echo "<p>";
    the_excerpt();
    echo "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class=\"fuente\">" . $alt . "</div>";
    echo "</div>";
	    
	endwhile;
	
	?>
</div>



                
