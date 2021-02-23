<!-- TESTIMONIALS SECTION -->
<?php if ( get_field('testimonials_bg_img') ): ?>
<div class="testimonials-container overflow-fix" style="background-image: url(<?php the_field('testimonials_bg_img'); ?>);">
<?php endif; ?>
	<div class="inner">
		<h1 class="section-title light"><?php echo esc_html_e('Testimonials'); ?></h1>
		<?php echo do_shortcode('[testimonials_carousel]'); ?>
		<!--<div class="cta-buttons light">
			<?php if ( get_field('test_link') ): ?>
				<a href="<?php the_field('test_link'); ?>"><?php echo esc_html_e('View all testimonials'); ?></a>
			<?php endif; ?>
		</div>-->
	</div>
</div>
<!-- / TESTIMONIALS SECTION -->