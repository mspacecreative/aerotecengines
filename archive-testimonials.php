<?php get_header(); ?>

<?php
$narrow =  get_field('narrow_column', 'options');
$nodrawing = get_field('no_drawing', 'options');
if ( $narrow ): ?>
<div id="main-content" class="narrow">
<?php elseif ( $nodrawing ): ?>
<div id="main-content" class="no-drawing">
<?php else : ?>
<div id="main-content">
<?php endif; ?>
	<div class="container">
		<div id="content-area" class="clearfix">
			<div class="section-title-container boxed">
				<h1 class="section-title"><?php echo post_type_archive_title( '', false ); ?></h1>
			</div>
			<?php get_template_part('includes/loop-testimonials'); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php

get_footer();
