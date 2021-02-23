<?php
$bgcolor = get_field('background_colour');
$padding = get_field('padding');

if ( $padding == 'both' && $bgcolor == 'lightgrey' ): ?>
<div class="section_container light_grey_bg extra-top-bottom-padding">

<?php elseif ( $padding == 'both' && $bgcolor == 'lightgold' ): ?>
<div class="section_container light_gold_bg extra-top-bottom-padding">

<?php elseif ( $padding == 'top' && $bgcolor == 'lightgrey' ): ?>
<div class="section_container extra-top-bottom-padding light_grey_bg">

<?php elseif ( $padding == 'top' && $bgcolor == 'lightgold' ): ?>
<div class="section_container extra-top-bottom-padding light_gold_bg">

<?php elseif ( $padding == 'bottom' && $bgcolor == 'lightgrey' ): ?>
<div class="section_container extra-top-bottom-padding light_grey_bg">

<?php elseif ( $padding == 'bottom' && $bgcolor == 'lightgold' ): ?>
<div class="section_container extra-top-bottom-padding light_gold_bg">

<?php elseif ( $padding == 'none' && $bgcolor == 'lightgrey' ): ?>
<div class="section_container extra-top-bottom-padding light_grey_bg">

<?php elseif ( $padding == 'none' && $bgcolor == 'lightgold' ): ?>
<div class="section_container extra-top-bottom-padding light_gold_bg">

<?php elseif ( $padding == 'top' ): ?>
<div class="section_container top-padding">

<?php elseif ( $padding == 'bottom' ): ?>
<div class="section_container bottom-padding">

<?php elseif ( $padding == 'both' ): ?>
<div class="section_container top-bottom-padding">

<?php elseif ( $padding == 'none' ): ?>
<div class="section_container no-padding">

<?php else : ?>
<div class="section_container">
<?php endif;

	$maxwidth800 = get_field('narrow_column');
	if ( $maxwidth800 ): ?>
	<div class="row_container max-width-800">
	<?php else : ?>
	<div class="row_container">
	<?php endif; ?>
		<?php if ( get_field('text_editor') ): ?>
			<?php the_field('text_editor'); ?>
		<?php endif; ?>
	</div>
</div>