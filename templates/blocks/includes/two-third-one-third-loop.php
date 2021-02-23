<?php
$boxed = get_field('boxed_column');

if ( $boxed ): ?>

<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 col-container bottom-margin-25 text-column">
	<?php the_field('two_third_column'); ?>
</div>

<?php if( have_rows('one_third_column') ): ?>
<?php while( have_rows('one_third_column') ): the_row(); ?>

	<?php if ( get_sub_field('content_type') == 'text' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-container">
		<div class="boxed-content">
			<?php the_sub_field('text_editor'); ?>
		</div>
	</div>
	
	<?php elseif ( get_sub_field('content_type') == 'image' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-container">
		<?php 
		$image = get_sub_field('image_upload');
		$size = 'large';
			
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}
		?>
	</div>
	
	<?php elseif ( get_sub_field('content_type') == 'video' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-container">
		<?php the_sub_field('video_upload'); ?>
	</div>
	<?php endif; ?>

<?php endwhile; ?>
<?php endif;

else : ?>

<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 col-container bottom-margin-25 text-column">
	<?php the_field('two_third_column'); ?>
</div>

<?php if( have_rows('one_third_column') ): ?>
<?php while( have_rows('one_third_column') ): the_row();
$contenttype = get_sub_field('content_type'); ?>

	<?php if ( $contenttype == 'text' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-container">
		<?php the_sub_field('text_editor'); ?>
	</div>
	
	<?php elseif ( $contenttype == 'image' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-container">
		<?php 
		$image = get_sub_field('image_upload');
		$size = 'large';
			
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}
		?>
	</div>
	
	<?php elseif ( $contenttype == 'video' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-container">
		<?php the_sub_field('video_upload'); ?>
	</div>
	
	<?php elseif ( $contenttype == 'carousel' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-container">
		<div class="carousel who_we_are">
					
			<?php
			$images = get_sub_field('photo_gallery');
			$size = 'large';
					
			if( $images ):
			foreach( $images as $image ): ?>
					
			<div>
				<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php if ( $image ): ?>
				<p style="margin: 15px 0 0; text-align: center;"><?php echo $image['title']; ?></p>
				<?php endif; ?>
			</div>
					
			<?php 
			endforeach;
			endif; ?>
					
		</div>
	</div>
	<?php endif; ?>

<?php endwhile; ?>
<?php endif;
	
endif;