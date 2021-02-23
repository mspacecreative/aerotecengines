<div class="section">
	<div class="row_container">
		<h2 style="margin-top: 0;">Current Openings</h2>
		<?php
		$args = array(
		    'post_type' => 'careers',
		    'posts_per_page'=> -1,
		);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>
		<ul class="row gutter_space_2 careers-list clear">
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12 flex-box">
				<span class="bullet-container">
					<h3 style="margin: 0 0 5px;"><?php the_title(); ?></h3>
					<?php if ( has_excerpt() ) {
						echo the_excerpt();
					} else {
						the_content();
					}
					$post_type = get_post_type(get_the_ID());   
				    $taxonomies = get_object_taxonomies($post_type);   
				    $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names")); 
				    if( !empty($taxonomy_names) ) {
				    	foreach($taxonomy_names as $tax_name) { 
							echo '<p><span class="goldcolor">Department:</span> ' . $tax_name . '</p>';
						}
					} ?>
				</span>
			</li>
			<?php endwhile; ?>
		</ul>
		<?php endif; wp_reset_query(); ?>
	</div>
</div>
	
	