<?php 
global $et_no_results_heading_tag;
if ( empty( $et_no_results_heading_tag ) ){
	$et_no_results_heading_tag = 'h1';
}
?>
<div class="entry">
<!--If no results are found-->
	<<?php echo $et_no_results_heading_tag; ?> class="not-found-title"><?php esc_html_e('No Results Found','Divi'); ?></<?php echo $et_no_results_heading_tag; ?>>
	<p><?php esc_html_e('The page you requested could not be found. Please use the navigation above to locate the page.','Divi'); ?></p>
</div>
<!--End if no results are found-->