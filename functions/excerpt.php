<?php
function wpshout_longer_excerpts( $length ) {
	// Don't change anything inside /wp-admin/
	if ( is_admin() ) {
		return $length;
	}
	// Set excerpt length to 140 words
	return 20;
}
// "999" priority makes this run last of all the functions hooked to this filter, meaning it overrides them
add_filter( 'excerpt_length', 'wpshout_longer_excerpts', 999 );