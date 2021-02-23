<div id="instafeed">
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	
	<?php 
	$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'services',
	);
	$the_query = new WP_Query( $args );
	    if ( $the_query->have_posts() ) :
	        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="grid-item">
				<?php if ( get_field('horizontal_icon') ): ?>
				<div class="grid-inner horizontal">
				<?php else : ?>
				<div class="grid-inner">
				<?php endif; ?>
					<?php if ( has_post_thumbnail() ) { ?>
					    <span><?php echo the_post_thumbnail(); ?></span>
					<?php } ?>
						<div class="card-content">
							<h3><?php the_title(); ?></h3>
							<?php
							if( has_excerpt() ) { 
								the_excerpt(); 
							}
							
							$buttontype = get_field('button_type');
							if ( $buttontype == 'page-link' ):
							
							if ( have_rows('button') ): 
							while ( have_rows('button') ): the_row();
							$label = get_sub_field('label');
							$link = get_sub_field('link'); ?>
							
							<div class="cta-buttons">
								<a href="<?php echo $link ?>"><?php echo $label ?></a>
							</div>
							
							<?php 
							endwhile;
							endif; ?>
								
							<?php elseif ( $buttontype == 'permalink' ): ?>
							<div class="cta-buttons">
								<a href="<?php the_permalink(); ?>"><?php  _e(' Learn more'); ?></a>
							 </div>
								
							<?php endif; ?>
						</div>
				</div>
			</div>
			<?php endwhile; 
		endif; wp_reset_query();
	?>
	
</div>