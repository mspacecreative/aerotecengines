<div id="instafeed">
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	
	<?php 
	$loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => -1 ) );
	    if ( $loop->have_posts() ) :
	        while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="grid-item">
				<div class="grid-inner">
					<div class="card-content">
						<i class="fa fa-quote-left" aria-hidden="true"></i>
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; 
		endif; wp_reset_postdata();
	?>
	
</div>