<div class="services-section clearfix" style="background-image: url(<?php the_field('section_bg_img'); ?>);">
	
	<div class="section-title-container">
		<h1 class="section-title light"><?php the_field('section_title'); ?></h1>
	</div><!-- / section-title-container -->
	
	<div class="inner">
		
		<div class="service-block-container clearfix light">
			
			<?php if( have_rows('service_blocks') ):
			while ( have_rows('service_blocks') ) : the_row(); ?>
			
			<div class="service">
				
				<div class="service-icon">
					<?php 
					$image = get_sub_field('service_icon');
					$size = 'thumbnail';
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
				</div><!-- / service-icon -->
				
				<?php if ( get_sub_field('service_blurb') ): ?>
				<div class="service-blurb">
					<?php the_sub_field('service_blurb'); ?>
				</div><!-- / service-blurb -->
				<?php endif; ?>
				
			</div><!-- / service -->
			<?php endwhile;
			
			else :
			
			endif; ?>
			
		</div><!-- / service-block-container -->
		
		<div class="buttons-container">
			
			<?php if( have_rows('service_buttons') ): ?>
			
			<ul class="cta-buttons inline">
				<?php while ( have_rows('service_buttons') ) : the_row(); ?>
				<li>
					<a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_label'); ?></a>
				</li>
				<?php endwhile;
				else : ?>
			</ul>
		
			<?php endif; ?>
		
		</div><!-- / buttons-container -->
		
	</div><!-- / inner -->
	
</div><!-- / services-section -->