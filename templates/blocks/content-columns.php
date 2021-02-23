<?php 
$imgborder = get_field('image_border');
$tablestyle = get_field('convert_grid_to_table');
$padding = get_field('padding');
$readmore = get_field('read_more');
$hiddencontenttype = get_field('hidden_content_type');

if ( $imgborder && $padding == 'top' ): ?>
<div class="section_container image-borders top-padding">

<?php elseif ( $imgborder && $padding == 'bottom' ): ?>
<div class="section_container image-borders bottom-padding">

<?php elseif ( $imgborder && $padding == 'both' ): ?>
<div class="section_container image-borders top-bottom-padding">

<?php elseif ( $imgborder && $padding == 'none' ): ?>
<div class="section_container image-borders no-padding">

<?php elseif ( $tablestyle && $padding == 'top' ): ?>
<div class="section_container image-borders top-padding">

<?php elseif ( $tablestyle && $padding == 'bottom' ): ?>
<div class="section_container image-borders bottom-padding">

<?php elseif ( $tablestyle && $padding == 'both' ): ?>
<div class="section_container image-borders top-bottom-padding">

<?php elseif ( $tablestyle && $padding == 'none' ): ?>
<div class="section_container image-borders no-padding">

<?php elseif ( $padding == 'top' ): ?>
<div class="section_container top-padding">

<?php elseif ( $padding == 'bottom' ): ?>
<div class="section_container bottom-padding">

<?php elseif ( $padding == 'both' ): ?>
<div class="section_container top-bottom-padding">

<?php elseif ( $padding == 'none' ): ?>
<div class="section_container no-padding">

<?php elseif ( $imgborder ): ?>
<div class="section image-borders">
	
<?php elseif ( $tablestyle ): ?>
<div class="section table-style">

<?php else : ?>
<div class="section_container">
	
<?php endif;

	if ( $readmore ): ?>
	<div class="row_container read-more-container">
	<?php else : ?>
	<div class="row_container">
	<?php endif; ?>
		
		<?php 
		$headerstyle = get_field('header_style');
		
		if ( $headerstyle == 'default' ):
		if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif;
		
		elseif ( $headerstyle == 'smallheading' ):
		if ( get_field('section_heading') ): ?>
		<h3><?php the_field('section_heading'); ?></h3>
		<?php endif;
		
		elseif ( $headerstyle == 'smallheadinglinerule' ):
		if ( get_field('section_heading') ): ?>
		<h3 class="h3_linerule"><?php the_field('section_heading'); ?></h3>
		<?php endif;
		
		else :
		if ( get_field('section_heading') ): ?>
		<h2><?php the_field('section_heading'); ?></h2>
		<?php endif;
		endif;
		
		if( have_rows('flexbox') ):
		
		$gutterspace = get_field('gutter_space');
		$verticalalign = get_field('vertical_alignment');
		
		if ( $gutterspace == 'one' && $verticalalign == 'middle' ): ?>
		<div class="row clear middle-lg middle-md">
		
		<?php elseif ( $gutterspace == 'one' && $verticalalign == 'bottom' ): ?>
		<div class="row clear bottom-lg bottom-md">
		
		<?php elseif ( $gutterspace == 'one' && $verticalalign == 'top' ): ?>
		<div class="row clear">
		
		<?php elseif ( $gutterspace == 'two' && $verticalalign == 'middle' ): ?>
		<div class="row gutter_space_2 clear middle-lg middle-md">
		
		<?php elseif ( $gutterspace == 'two' && $verticalalign == 'bottom' ): ?>
		<div class="row gutter_space_2 clear bottom-lg bottom-md">
		
		<?php elseif ( $gutterspace == 'two' && $verticalalign == 'top' ): ?>
		<div class="row gutter_space_2 clear">
		
		<?php elseif ( $gutterspace == 'three' && $verticalalign == 'middle' ): ?>
		<div class="row gutter_space_3 clear middle-lg middle-md">
		
		<?php elseif ( $gutterspace == 'three' && $verticalalign == 'bottom' ): ?>
		<div class="row gutter_space_3 clear bottom-lg bottom-md">
		
		<?php elseif ( $gutterspace == 'three' && $verticalalign == 'top' ): ?>
		<div class="row gutter_space_3 clear">
		
		<?php elseif ( $gutterspace == 'one' ): ?>
		<div class="row clear">
		
		<?php elseif ( $gutterspace == 'two' ): ?>
		<div class="row gutter_space_2 clear">
		
		<?php elseif ( $gutterspace == 'three' ): ?>
		<div class="row gutter_space_3 clear">
		
		<?php else : ?>
		<div class="row clear">
		<?php endif; ?>
			
			<?php while( have_rows('flexbox') ): the_row();
			
			$columncount = get_field('column_count');
			
			if ( $columncount == 'two' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'three' ): ?>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php elseif ( $columncount == 'four' ): ?>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 flex-box">
				
			<?php endif; ?>
				
				<div>
					<?php if( have_rows('flexbox_content') ): ?>
					<?php while( have_rows('flexbox_content') ): the_row();
					$contenttype = get_sub_field('content_type');
					$body = get_sub_field('body');
					$image = get_sub_field('image');
					$heading = get_sub_field('heading');
					$colheadingstyle = get_field('column_header_style');
					$trimmed = wp_trim_words( get_sub_field('body'), 15 );
					
					if ( $heading && $colheadingstyle == 'h2' ) {
						echo '<h2>' . $heading . '</h2>';
					} elseif ( $heading && $colheadingstyle == 'h3' ) {
						echo '<h3>' . $heading . '</h3>';
					} elseif ( $heading ) {
						echo '<h3>' . $heading . '</h3>';
					}
					
					if ( $readmore && $hiddencontenttype == 'accordion' ) {
						if ( $contenttype == 'text' ) {
							echo '<div class="hidden-content">' . $body . '</div>
								  <a href="javascript:void(0)" class="button read-more accordion">Read more</a>';
						} else {
							echo '<div class="hidden-content">' . $body . '</div>
								  <a href="javascript:void(0)" class="button read-more accordion">Read more</a>';
						}
					} elseif ( $readmore && $hiddencontenttype == 'lightbox' ) {
						if ( $contenttype == 'text' ) {
							echo '<p style="margin-bottom: 20px;">' . $trimmed . '</p><div class="panel-overlay"></div><button class="hamburger close-panel hamburger--squeeze is-active" type="button" style="height: 74px;"><span class="hamburger-box"> <span class="hamburger-inner close"></span></span></button><div class="hidden-content panel">' . $body . '</div>
								  <a href="javascript:void(0)" class="button read-more lightbox">Read more</a>';
						} else {
							echo '<div class="hidden-content">' . $body . '</div>
								  <a href="javascript:void(0)" class="button read-more lightbox">Read more</a>';
						}
					} else {
						if ( $contenttype == 'text' ) {
							echo $body;
						} elseif ( $contenttype == 'image' ) {
							if( !empty( $image ) ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif;
						} else {
							echo $body;
						}
					}
					
					if( have_rows('button') ): ?>
					<?php while( have_rows('button') ): the_row();
					$label = get_sub_field('label');
					$link = get_sub_field('link');
					
					if ( $link ) {
						echo '<a href="' . $link . '">' . $label . '</a>';
					}
					
					endwhile;
					endif;
					
					endwhile;
					endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</div>