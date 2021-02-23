<?php

// CAREERS LOOP
function careersLoop() {
	ob_start();
		get_template_part('includes/loop-careers');
	return ob_get_clean();
}
add_shortcode( 'careers_loop', 'careersLoop' );

// CAREERS LOOP FLEXBOX
function careersLoopFlex() {
	ob_start();
		get_template_part('includes/loop-careers-flexbox');
	return ob_get_clean();
}
add_shortcode( 'careers_loop_flex', 'careersLoopFlex' );

// CAREERS LOOP
function servicesSingleLoop() {
	ob_start();
		get_template_part('includes/loop-services-single');
	return ob_get_clean();
}
add_shortcode( 'services_single_loop', 'servicesSingleLoop' );