<div class="approved-centres">
	<div class="title-container">
		<h1 class="section-title"><?php esc_html_e('Approved Service Centres'); ?></h1>
	</div>
	<?php echo do_shortcode('[service_centres_map]'); ?>
</div>

<div class="warranty-section clearfix">
	<div class="warranty-badge">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/warranty-badge.svg" />
	</div>
	<?php if ( get_field('warranty_blurb') ): ?>
	<div class="one-half">
		<div class="warranty-blurb-container">
			<?php the_field('warranty_blurb'); ?>
		</div>
	</div>
	<?php endif; ?>
	<?php if ( get_field('warranty_img') ): ?>
	<div class="one-half bg-img" style="background-image: url(<?php the_field('warranty_img'); ?>);">
		
	</div>
	<?php endif; ?>
</div>