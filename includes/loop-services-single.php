<div class="section-title-container boxed bottom-padding">
	<h1 class="section-title">Other Services</h1>
</div>
<div class="row_container">
	<div class="section_container">
		<div id="services-grid-container" class="row gutter_space_2">
				
			<?php 
			$args = array(
			'numberposts'	=> -1,
			'post_type'		=> 'services',
			'post__not_in'  => array(get_the_ID()),
			);
			$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 col-container">
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
										
							$buttontype = get_field('button_type', $post->ID);
							if ( $buttontype == 'page-link' ):
										
							if ( have_rows('button', $post->ID) ): 
							while ( have_rows('button', $post->ID) ): the_row();
							$label = get_sub_field('label', $post->ID);
							$link = get_sub_field('link', $post->ID); ?>
										
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
			endif; wp_reset_query(); ?>
				
		</div>
	</div>
</div>