<?php

// CUSTOM STYLES ADDED TO FORMATS DROPDOWN
function my_custom_styles( $init_array ) {  

    $style_formats = array(  
        // These are the custom styles
        array(  
            'title' => 'Download PDF Button',  
            'block' => 'a',  
            'classes' => 'pdf_dl',
            'wrapper' => true,
        ),  
        array(  
            'title' => 'CTA Button',  
            'block' => 'span',  
            'classes' => 'links-wrap',
            'wrapper' => true,
        ),  
        array(  
            'title' => 'Light CTA Button',  
            'block' => 'span',  
            'classes' => 'links-wrap light',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Inline CTA Button',  
            'block' => 'span',  
            'classes' => 'inline-links-wrap',
            'wrapper' => true,
        ),  
        array(  
            'title' => 'Light Inline CTA Button',  
            'block' => 'span',  
            'classes' => 'inline-links-wrap light',
            'wrapper' => true,
        ),
        array(
        	'title' => 'Underlined Title',
        	'block' => 'span',
        	'classes' => 'underlined-heading',
        	'wrapper' => true,
        ),
       	array(
	       	'title' => 'Centered Title with Line Rules',
	       	'block' => 'div',
	       	'classes' => 'centered-title-with-line-rules',
	       	'wrapper' => true,
       )
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );

function custom_editor_styles() {
	add_editor_style('css/editor-styles.css');
}

add_action('init', 'custom_editor_styles');