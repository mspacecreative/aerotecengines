<?php 
/* Template Name: Archive Page */
get_header(); ?>

<?php
$narrow =  get_field('narrow_column');
$nodrawing = get_field('no_drawing');
if ( $narrow == 'true' && $nodrawing == 'true' ): ?>
<div id="main-content" class="narrow no-drawing">
<?php elseif ( $narrow ): ?>
<div id="main-content" class="narrow">
<?php elseif ( $nodrawing ): ?>
<div id="main-content" class="no-drawing">
<?php else : ?>
<div id="main-content">
<?php endif; ?>
	<div class="container">
		<div id="content-area" class="clearfix">
			<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
				the_post(); 
			
				the_content();
			
				}
			}
			?>
			
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php

get_footer();
