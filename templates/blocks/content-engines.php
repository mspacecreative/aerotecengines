<div class="section_container featured-engines">
	<div class="row_container clearfix">
		
		<?php if( have_rows('lycoming') ): ?>
		
		<div class="one_half_col">
			
			<?php while( have_rows('lycoming') ): the_row();
			
			$lycominglogo = get_sub_field('lycoming_logo');
			$lycomingengine = get_sub_field('lycoming_engine');
			$externallink = get_field('external_link', $lycominglogo);
			$size = 'full'; ?>
	
			<?php if ( $externallink ): ?>
			<a href="<?php the_field('external_link', $lycominglogo); ?>" target="_blank">
				<?php echo wp_get_attachment_image( $lycominglogo, $size ); ?>
			</a>
			<?php endif; ?>
			<?php echo wp_get_attachment_image( $lycomingengine, $size ); ?>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
		<?php if( have_rows('continental') ): ?>
		
		<div class="one_half_col">
			<?php while( have_rows('continental') ): the_row();
			
			$continentallogo = get_sub_field('continental_logo');
			$continentalengine = get_sub_field('continental_engine');
			$externallink = get_field('external_link', $continentallogo);
			$size = 'full'; ?>
			
			<?php if ( $externallink ): ?>
			<a href="<?php the_field('external_link', $continentallogo); ?>" target="_blank">
				<?php echo wp_get_attachment_image( $continentallogo, $size ); ?>
			</a>
			<?php endif; ?>
			<?php echo wp_get_attachment_image( $continentalengine, $size ); ?>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
	</div>
</div>