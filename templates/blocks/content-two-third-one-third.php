<?php 
$bgcolor = get_field('background_colour');
if ( $bgcolor == 'lightgrey' ): ?>
<div class="section_container light_grey_bg extra-top-bottom-padding">
<?php elseif ( $bgcolor == 'lightgold' ): ?>
<div class="section_container light_gold_bg extra-top-bottom-padding">
<?php elseif ( $bgcolor == 'lightblue' ): ?>
<div class="section_container light_blue_bg extra-top-bottom-padding">
<?php else : ?>
<div class="section_container">
<?php endif;

$padding = get_field('padding');
$blockanchor = get_field('block_id');
$flex = get_field('two_third_one_third_vertical_alignment');
$reverse = get_field('reverse_columns');
$heading = get_field('heading');

if ( $flex == 'bottom' ): ?>
	
	<div class="row_container">
		
		<?php if ( $heading ): ?>
		<h2><?php echo $heading ?></h2>
		<?php endif;
		
		if ( $reverse && $blockanchor && $padding == 'top' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-lg bottom-md top-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-lg bottom-md bottom-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'both' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-lg bottom-md top-bottom-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'none' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-lg bottom-md no-padding reverse">
		
		<?php elseif ( $blockanchor && $padding == 'top' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-lg bottom-md top-padding">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-lg bottom-md bottom-padding">
		
		<?php elseif ( $blockanchor && $padding == 'both' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-lg bottom-md top-bottom-padding">
		
		<?php elseif ( $blockanchor && $padding == 'none' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-lg bottom-md no-padding">
		
		<?php elseif ( $reverse && $padding == 'top' ): ?>
		<div class="row gutter_space_3 clear bottom-lg bottom-md top-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'bottom' ): ?>
		<div class="row gutter_space_3 clear bottom-lg bottom-md bottom-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'both' ): ?>
		<div class="row gutter_space_3 clear bottom-lg bottom-md top-bottom-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'none' ): ?>
		<div class="row gutter_space_3 clear bottom-lg bottom-md no-padding">
		
		<?php elseif ( $reverse && $blockanchor ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-lg bottom-md reverse">
		
		<?php elseif ( $reverse ): ?>
		<div class="row gutter_space_3 clear bottom-lg bottom-md reverse">
		
		<?php elseif ( $blockanchor ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'top' ): ?>
		<div class="row gutter_space_3 clear bottom-lg bottom-md top-padding">
		
		<?php elseif ( $padding == 'bottom' ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md bottom-padding">
		
		<?php elseif ( $padding == 'both' ): ?>
		<div class="row gutter_space_3 clear bottom-lg bottom-md top-bottom-padding">
		
		<?php elseif ( $padding == 'none' ): ?>
		<div class="row gutter_space_3 clear bottom-lg bottom-md no-padding">
		
		<?php else : ?>
		<div class="row gutter_space_3 clear bottom-lg bottom-md top-bottom-padding">
		
		<?php endif; ?>
		
			<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
<?php elseif ( $flex == 'center' ): ?>
	
	<div class="row_container">
		
		<?php if ( $heading ): ?>
		<h2><?php echo $heading ?></h2>
		<?php endif;
		
		if ( $reverse && $blockanchor && $padding == 'top' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear middle-lg middle-md top-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear middle-lg middle-md bottom-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'both' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear middle-lg middle-md top-bottom-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'none' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear middle-lg middle-md no-padding reverse">
		
		<?php elseif ( $blockanchor && $padding == 'top' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear middle-lg middle-md top-padding">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear middle-lg middle-md bottom-padding">
		
		<?php elseif ( $blockanchor && $padding == 'both' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear middle-lg middle-md top-bottom-padding">
		
		<?php elseif ( $blockanchor && $padding == 'none' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear middle-lg middle-md no-padding">
		
		<?php elseif ( $reverse && $padding == 'top' ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md top-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'bottom' ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md bottom-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'both' ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md top-bottom-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'none' ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md no-padding">
		
		<?php elseif ( $reverse && $blockanchor ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear middle-lg middle-md reverse">
		
		<?php elseif ( $reverse ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md reverse">
		
		<?php elseif ( $blockanchor ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear middle-lg middle-md">
		
		<?php elseif ( $padding == 'top' ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md top-padding">
		
		<?php elseif ( $padding == 'bottom' ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md bottom-padding">
		
		<?php elseif ( $padding == 'both' ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md top-bottom-padding">
		
		<?php elseif ( $padding == 'none' ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md no-padding">
		
		<?php else : ?>
		<div class="row gutter_space_3 clear middle-lg middle-md top-bottom-padding">
		
		<?php endif; ?>
		
			<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
<?php elseif ( $flex == 'top' ) : ?>
	
	<div class="row_container">
		
		<?php if ( $heading ): ?>
		<h2><?php echo $heading ?></h2>
		<?php endif;
		
		if ( $reverse && $blockanchor && $padding == 'top' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear top-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'both' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear top-bottom-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'none' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear no-padding reverse">
		
		<?php elseif ( $blockanchor && $padding == 'top' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear top-padding">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-padding">
		
		<?php elseif ( $blockanchor && $padding == 'both' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear top-bottom-padding">
		
		<?php elseif ( $blockanchor && $padding == 'none' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear no-padding">
		
		<?php elseif ( $reverse && $padding == 'top' ): ?>
		<div class="row gutter_space_3 clear top-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'bottom' ): ?>
		<div class="row gutter_space_3 clear bottom-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'both' ): ?>
		<div class="row gutter_space_3 clear top-bottom-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'none' ): ?>
		<div class="row gutter_space_3 clear no-padding">
		
		<?php elseif ( $reverse && $blockanchor ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear reverse">
		
		<?php elseif ( $reverse ): ?>
		<div class="row gutter_space_3 clear reverse">
		
		<?php elseif ( $blockanchor ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear">
		
		<?php elseif ( $padding == 'top' ): ?>
		<div class="row gutter_space_3 clear top-padding">
		
		<?php elseif ( $padding == 'bottom' ): ?>
		<div class="row gutter_space_3 clear bottom-padding">
		
		<?php elseif ( $padding == 'both' ): ?>
		<div class="row gutter_space_3 clear top-bottom-padding">
		
		<?php elseif ( $padding == 'none' ): ?>
		<div class="row gutter_space_3 clear no-padding">
		
		<?php else : ?>
		<div class="row gutter_space_3 clear top-bottom-padding">
		
		<?php endif; ?>
		
			<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>
	
<?php else : ?>
	
	<div class="row_container">
		
		<?php if ( $heading ): ?>
		<h2><?php echo $heading ?></h2>
		<?php endif;
		
		if ( $reverse && $blockanchor && $padding == 'top' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear top-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'both' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear top-bottom-padding reverse">
		
		<?php elseif ( $reverse && $blockanchor && $padding == 'none' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear no-padding reverse">
		
		<?php elseif ( $blockanchor && $padding == 'top' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear top-padding">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear bottom-padding">
		
		<?php elseif ( $blockanchor && $padding == 'both' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear top-bottom-padding">
		
		<?php elseif ( $blockanchor && $padding == 'none' ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear no-padding">
		
		<?php elseif ( $reverse && $padding == 'top' ): ?>
		<div class="row gutter_space_3 clear top-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'bottom' ): ?>
		<div class="row gutter_space_3 clear bottom-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'both' ): ?>
		<div class="row gutter_space_3 clear top-bottom-padding reverse">
		
		<?php elseif ( $reverse && $padding == 'none' ): ?>
		<div class="row gutter_space_3 clear no-padding">
		
		<?php elseif ( $reverse && $blockanchor ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear reverse">
		
		<?php elseif ( $reverse ): ?>
		<div class="row gutter_space_3 clear reverse">
		
		<?php elseif ( $blockanchor ): ?>
		<div id="<?php echo $blockanchor ?>" class="row gutter_space_3 clear">
		
		<?php elseif ( $padding == 'top' ): ?>
		<div class="row gutter_space_3 clear top-padding">
		
		<?php elseif ( $padding == 'bottom' ): ?>
		<div class="row gutter_space_3 clear bottom-padding">
		
		<?php elseif ( $padding == 'both' ): ?>
		<div class="row gutter_space_3 clear top-bottom-padding">
		
		<?php elseif ( $padding == 'none' ): ?>
		<div class="row gutter_space_3 clear no-padding">
		
		<?php else : ?>
		<div class="row gutter_space_3 clear top-bottom-padding">
		
		<?php endif; ?>
		
			<?php include('includes/two-third-one-third-loop.php'); ?>
		
		</div>
	</div>

<?php endif; ?>
</div>