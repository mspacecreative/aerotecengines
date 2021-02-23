<?php
$padding = get_field('padding');
$maxwidth = get_field('max_width');
$rowheading = get_field('row_heading');
$bgcolor = get_field('background_colour');
$blockanchor = get_field('block_anchor');

if ( $blockanchor && $bgcolor == 'lightblue' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_blue_bg">
<?php elseif ( $blockanchor && $bgcolor == 'lightgrey' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_grey_bg">
<?php elseif ( $bgcolor == 'lightgrey' ): ?>
<div class="section light_grey_bg">
<?php elseif ( $bgcolor == 'lightblue' ): ?>
<div class="section light_blue_bg">
<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>" class="section">
<?php else : ?>
<div class="section">
<?php endif; ?>

	<div class="inner no-top-bottom-padding">
	
		<?php if ( $rowheading ): ?>
		<div class="inner no-top-bottom-padding centered-title-with-line-rules">
			<h2 class="bottom-margin-50"><?php echo $rowheading ?></h2>
		</div>
		<?php endif; ?>
		
		<?php if ( $padding == 'both' && $maxwidth ): ?>
		<div class="top-bottom-padding-50 clear maxWidth600">
		<?php elseif ( $padding == 'top' && $maxwidth ): ?>
		<div class="top-padding clear maxWidth600">
		<?php elseif ( $padding == 'bottom' && $maxwidth ): ?>
		<div class="bottom-padding clear maxWidth600">
		<?php elseif ( $padding == 'both' ): ?>
		<div class="top-bottom-padding-50 inner clear">
		<?php elseif ( $padding == 'top' ): ?>
		<div class="top-padding inner clear">
		<?php elseif ( $padding == 'bottom' ): ?>
		<div class="bottom-padding clear">
		<?php elseif ( $maxwidth ): ?>
		<div class="clear maxWidth600">
		<?php else : ?>
		<div class="no-top-bottom-padding inner clear">
		<?php endif; ?>
		
			<div class="carousel content-carousel shop-tour">
								
					<?php
					$images = get_field('photo_gallery');
								
					if( $images ):
					foreach( $images as $image ): ?>
								
					<div class="row middle-lg middle-md gutter_space_2">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-container float-left">
							<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-container float-left">
							<?php if ( $image ): ?>
							<p><?php echo $image['caption']; ?></p>
							<?php endif; ?>
						</div>
					</div>
								
					<?php 
					endforeach;
					endif; ?>
								
				</div>
			
		</div>
		
	</div>
</div>