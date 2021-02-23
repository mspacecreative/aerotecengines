<div class="section_container gallery-block">
	<div class="row_container clearfix">
		<ul class="pgwSlider">
			<?php 
			$images = get_field('photo_gallery');
			$size = 'full';
						
			if( $images ):
			foreach( $images as $image ): ?>
			<li>
				<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
			</li> 
			<?php endforeach;
			endif; ?>
		</div>
	</div>
</div>