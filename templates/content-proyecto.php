<?php while (have_posts()) : the_post(); ?>

<article <?php post_class(); ?>>
	

	
	<header class="jupa">
		<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} 
			?>
		<div class="container"><div class="row"><div class="col-md-8 col-md-offset-2">
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<!-- show custom field enlace -->
			<?php 
				if (get_post_meta($post->ID, "enlace", TRUE)){
					echo "<p class=\"enlace\"><a href=\"" . get_post_meta(get_the_ID(), 'enlace', TRUE) . "\" target=\"_blank\">Sitio web</a></p>";
				}
			?>

		
		</div></div></div>
	</header> 
	    
	      
    <div class="bigsizeme">
	    <div class="container">
		    <div class="entry-content row">
				<div class="diente"></div>
				<div class="col-md-8 col-md-offset-2"><?php the_content(); ?></div>
	    	</div>
	    </div>
    </div>
    
    <div class="bigsizeme iconos">
    <div class="container wrap-integrantes">
	    <div class="row">
	    	<div class="col-md-12"><h2><i class="icon-cog icon-large" ></i>Investigadores en <i><?php the_title(); ?></i></h2></div>
		
				<?php 
				/*
				*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
				*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
				*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
				*/
					
					$post_objects = get_field('persona');
					
					if( $post_objects ): ?>
					  <ul class="lista-personas">
				    <?php foreach($post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				            
				            
					            <li class="col-md-4 col-sm-6 clearfix">
					            	
				            		<div class="persona">
					            		<div class="text-center">
					            		<?php 
														if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
															the_post_thumbnail( 'thumbnail', array( 'class' => 'img-circle photo' ) );
														} 
													?>
					            		</div>
					            		<h4><?php the_title(); ?></h4>
													<p><?php the_content(); ?></p>
				            		</div>
								</li>
					            
					    <?php endforeach; ?>
						</ul>
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif;
		
				?>
	    </div>
	    
	  </div></div>
                
    
  </article>
  <div class="container-fluid footer-nav">  
    <div class="col-sm-6 col-sm-offset-3">
	    <div class="proyectos-nav">
			<h3 class="text-center">Otros nodos</h3>
			<hr>
	    <nav id="nav-single">					
				<span class="nav-previous pull-left"><?php previous_post_link(); ?>  </span>
				<span class="nav-next pull-right"><?php next_post_link(); ?></span>
			</nav><!-- #nav-single -->
	    </div>
		</div>
  </div>
<?php endwhile; ?>

