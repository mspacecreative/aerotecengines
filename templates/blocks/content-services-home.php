<div class="services-section clearfix" style="background-image: url(<?php the_field('background_image'); ?>);">
	
	<div class="section-title-container">
		<h1 class="section-title light"><?php the_field('section_title'); ?></h1>
	</div><!-- / section-title-container -->
	
	<div class="inner">
		
		<div class="service-block-container clearfix light">
			
			<?php 
			$post_object = get_field('bucket_one');
			
			if( $post_object ): 
			
				// override $post
				$post = $post_object;
				setup_postdata( $post );
			?>
			
			<div class="service">
				
				<div class="service-icon">
					<?php echo get_the_post_thumbnail($post); ?>
				</div><!-- / service-icon -->
				
				<div class="service-blurb">
					<h3><?php echo get_the_title($post); ?></h3>
					<?php 
					if ( has_excerpt($post) ): ?>
						<p><?php echo get_the_excerpt($post); ?></p>
					<?php else :
						the_field('content', $post);
					endif;
					?>
				</div><!-- / service-blurb -->
				
			</div><!-- / service -->
			
			<?php wp_reset_postdata();
			endif; ?>
			
			<?php 
			$post_object = get_field('bucket_two');
			
			if( $post_object ): 
			
				// override $post
				$post = $post_object;
				setup_postdata( $post );
			?>
			
			<div class="service">
				
				<div class="service-icon">
					<?php echo get_the_post_thumbnail($post); ?>
				</div><!-- / service-icon -->
				
				<div class="service-blurb">
					<h3><?php echo get_the_title($post); ?></h3>
					<?php 
					if ( has_excerpt($post) ): ?>
						<p><?php echo get_the_excerpt($post); ?></p>
					<?php else :
						the_field('content', $post);
					endif;
					?>
				</div><!-- / service-blurb -->
				
			</div><!-- / service -->
			
			<?php wp_reset_postdata();
			endif; ?>
			
			<?php 
			$post_object = get_field('bucket_three');
			
			if( $post_object ): 
			
				// override $post
				$post = $post_object;
				setup_postdata( $post );
			?>
			
			<div class="service">
				
				<div class="service-icon">
					<?php echo get_the_post_thumbnail($post); ?>
				</div><!-- / service-icon -->
				
				<div class="service-blurb">
					<h3><?php echo get_the_title($post); ?></h3>
					<?php 
					if ( has_excerpt($post) ): ?>
						<p><?php echo get_the_excerpt($post); ?></p>
					<?php else :
						the_field('content', $post);
					endif;
					?>
				</div><!-- / service-blurb -->
				
			</div><!-- / service -->
			
			<?php wp_reset_postdata();
			endif; ?>
			
		</div><!-- / service-block-container -->
		
		<div class="buttons-container">
			
			<?php if( have_rows('cta_buttons') ): ?>
			
			<ul class="cta-buttons inline">
				<?php while ( have_rows('cta_buttons') ) : the_row(); ?>
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