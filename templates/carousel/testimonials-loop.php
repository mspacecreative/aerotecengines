<div class="testimonials-slider" style="margin-bottom: 0;">
<?php 
$loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page', -1 ) );
    if ( $loop->have_posts() ) : ?>
    
        <?php while ( $loop->have_posts() ) : $loop->the_post();
        $id = get_the_ID(); ?>

		<div>
		 	<?php 
		 	$companyname = get_field('company_name', $id);
		 	$companylocation = get_field('company_location', $id);
		 	$authorsposition = get_field('authors_position', $id);
		 	
		 	if ( $companyname && $companylocation ): ?>
		 	<h4 class="light"><?php echo $companyname ?>, <?php echo $companylocation ?></h4>
		 	<?php elseif ( $companyname ): ?>
		 	<h4 class="light"><?php echo $companyname ?></h4>
		 	<?php elseif ( $companylocation ): ?>
		 	<h4 class="light"><?php echo $companylocation ?></h4>
		 	<?php endif; ?>
		 	
		 	<span class="light" style="font-style: italic;"><?php echo get_post_field('post_content', $post_id); ?></span>
		 	<?php if ( $authorsposition ) : ?>
		 	<h5 class="light"><?php the_title(); ?>, <?php echo $authorsposition ?></h5>
		 	<?php else : ?>
		 	<h5 class="light"><?php the_title(); ?></h5>
		 	<?php endif;
		 	 ?>
		</div>

		<?php endwhile; 
	endif;
wp_reset_postdata(); ?>
</div>