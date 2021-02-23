<?php
$padding = get_field('padding');

if ( $padding == 'both' ): ?>
<div class="section_container">
<?php elseif ( $padding == 'top' ): ?>
<div class="section_container top-padding">
<?php elseif ( $padding == 'bottom' ): ?>
<div class="section_container bottom-padding">
<?php elseif ( $padding == 'none' ): ?>
<div class="section_container no-padding">
<?php else : ?>
<div class="section_container">
<?php endif; ?>

	<div class="row_container">

		<?php 
		$gutterspace = get_field('gutter_space');
		$verticalalignment = get_field('vertical_alignment');
		
		if ( $gutterspace == 'one' && $verticalalignment == 'top' ): ?>
		<div class="row clearfix">
		
		<?php elseif ( $gutterspace == 'one' && $verticalalignment == 'middle' ): ?>
		<div class="row clearfix middle-lg middle-md">
		
		<?php elseif ( $gutterspace == 'one' && $verticalalignment == 'bottom' ): ?>
		<div class="row clearfix bottom-lg bottom-md">
		
		<?php elseif ( $gutterspace == 'two' && $verticalalignment == 'top' ): ?>
		<div class="row gutter_space_2 clearfix">
		
		<?php elseif ( $gutterspace == 'two' && $verticalalignment == 'middle' ): ?>
		<div class="row gutter_space_2 clearfix middle-lg middle-md">
			
		<?php elseif ( $gutterspace == 'two' && $verticalalignment == 'bottom' ): ?>
		<div class="row gutter_space_2 clearfix bottom-lg bottom-md">
			
		<?php elseif ( $gutterspace == 'three' && $verticalalignment == 'top' ): ?>
		<div class="row gutter_space_3 clearfix">
			
		<?php elseif ( $gutterspace == 'three' && $verticalalignment == 'middle' ): ?>
		<div class="row gutter_space_3 clearfix middle-lg middle-md">
			
		<?php elseif ( $gutterspace == 'three' && $verticalalignment == 'bottom' ): ?>
		<div class="row gutter_space_3 clearfix bottom-lg bottom-md">
			
		<?php elseif ( $gutterspace == 'one' ): ?>
		<div class="row clearfix">
		
		<?php elseif ( $gutterspace == 'two' ): ?>
		<div class="row gutter_space_2">
			
		<?php elseif ( $gutterspace == 'three' ): ?>
		<div class="row gutter_space_3 clearfix">
			
		<?php else : ?>
		<div class="row clearfix">
		<?php endif; ?>
		
			<?php
			$image = get_field('image');
			$size = 'full'; 
			
			if( $image ) { ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 flex-box static-img">
				<?php echo wp_get_attachment_image( $image, $size ); ?>
			</div>
			<?php } ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 flex-box">
				<?php the_field('content'); ?>
			</div>
		</div>
	</div>
</div>