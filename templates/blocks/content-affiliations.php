<div class="affiliations-section overflow-fix">
	<h1 class="section-title">
		<?php esc_html_e('affiliations'); ?>
	</h1>
	<div class="logo-container">
		<?php 
		$images = get_field('affiliate_logos');
		$size = 'full';
					
		if( $images ): ?>
		<ul>
			<?php foreach( $images as $image ): ?>
			<li>
				<?php
				$externallink = get_field('external_link', $image['ID']);
				if ( $externallink ): ?>
				<a href="<?php the_field('external_link', $image['ID']); ?>" target="_blank">
					<?php
					$squarelogo = get_field('square_logo', $image['ID']);
					if ( $squarelogo ): ?>
					<?php echo wp_get_attachment_image( $image['ID'], $size, "", ["class" => "square-logo"] ); ?>
					<?php else : ?>
					<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					<?php endif; ?>
				</a>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
		</ul> 
		<?php endif; ?>
		
	</div>
</div>