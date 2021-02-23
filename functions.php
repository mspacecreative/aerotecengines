<?php

// CUSTOMIZE POST META DATA
if ( ! function_exists( 'et_divi_post_meta' ) ) :
function et_divi_post_meta() {
	$postinfo = is_single() ? et_get_option( 'divi_postinfo2' ) : et_get_option( 'divi_postinfo1' );

	if ( $postinfo ) :
		echo '<p class="post-meta">';
		echo _e('Posted '); echo et_pb_postinfo_meta( $postinfo, et_get_option( 'divi_date_format', 'M j, Y' ), esc_html__( '0 comments', 'Divi' ), esc_html__( '1 comment', 'Divi' ), '% ' . esc_html__( 'comments', 'Divi' ) );
		echo '</p>';
	endif;
}
endif;

// THUMBNAIL SIZING
if (function_exists('add_theme_support'))
{
    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size( 'headshot', 205, 205, array( 'center', 'center' ) );
    add_image_size( 'sponsorlogo', 300, 205, array( 'center', 'center' ) );
}
 
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'headshot' => __( 'Head Shot' ),
        'sponsorlogo' => __( 'Sponsor Logo' ),
    ) );
}

/* MAIN STYLESHEET */
function my_theme_enqueue_styles() {

	$parent_style = 'parent-style';
	
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
	
	wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/css/slick.css', array(), null );
	wp_enqueue_style('slick-style');
	
	wp_enqueue_style( 'pgw-style', get_stylesheet_directory_uri() . '/css/pgwslider.min.css', array(), null );
	wp_enqueue_style('pgw-style');
	
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), null );
	wp_enqueue_style('slick-theme');
	
	wp_register_style('typekit', 'https://use.typekit.net/gfo2vxu.css', array(), '1.0', 'all');
	wp_enqueue_style('typekit');
}

function footer_scripts() {
	
	wp_enqueue_script( 'slick-script', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script('slick-script');
	
	wp_enqueue_script( 'pgw-script', get_stylesheet_directory_uri() . '/js/pgwslider.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script('pgw-script');
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
	
	wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
}

/* ACF OPTIONS PAGE */
if( function_exists('acf_add_options_sub_page') ) {

	acf_add_options_sub_page('Footer');
	acf_add_options_sub_page('Services Archive');
	acf_add_options_sub_page('Contact Box');
	
}

function remove_FooterArea6() {
	unregister_sidebar('sidebar-6');
	unregister_sidebar('sidebar-7');
}

// ARTISTS LOOP SHORTCODE
function artistsLoop() {
	ob_start();
		get_template_part('includes/loops/loop-artists');
	return ob_get_clean();
}

function artistsLoopFull() {
	ob_start();
		get_template_part('includes/loops/loop-artists-full');
	return ob_get_clean();
}

function comediansLoopFull() {
	ob_start();
		get_template_part('includes/loops/loop-comedians-full');
	return ob_get_clean();
}

// SERVICES CENTRES MAP
function serviceCentresMap() {
	ob_start();
		get_template_part('templates/maps/service-centres-map-2');
	return ob_get_clean();
}

// SPONSOR LOGO ON HOME PAGE
function sponsorLogos() {
	ob_start();
		get_template_part('includes/sponsor-logos-home');
	return ob_get_clean();
}

// TESTIMONIALS ON HOME PAGE
function testimonialsHome() {
	ob_start();
		get_template_part('templates/carousel/testimonials-loop');
	return ob_get_clean();
}

// SPONSOR LOGOS IN FOOTER
function sponsorLogosFooter() {
	ob_start();
		get_template_part('includes/sponsor-logos-footer');
	return ob_get_clean();
}

// SPONSOR LOGOS ON SPONSOR PAGE
function sponsorPageLogos() {
	ob_start();
		get_template_part('includes/sponsor-page-logos');
	return ob_get_clean();
}

// MAILCHIMP FORM
function mailChimpForm() {
	ob_start();
		get_template_part('includes/forms/mailchimp_form');
	return ob_get_clean();
}

// CUSTOM STYLES TO TINY MCE
function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}

// HOME PAGE SLIDER
function heroSlider() {
	ob_start();
		get_template_part('templates/hero-slider');
	return ob_get_clean();
}

// HOME PAGE SLIDER
function contentSlider() {
	ob_start();
		get_template_part('templates/blocks/content-slider');
}

// HOME PAGE SLIDER
function serviceBuckets() {
	ob_start();
		get_template_part('templates/blocks/content-services-home');
}

/*function my_mce_before_init_insert_formats( $init_array ) {
 
    $style_formats = array(  

        array(  
            'title' => 'White CTA Button',  
            'block' => 'a',  
            'classes' => 'cta_button_light',
            'wrapper' => true,
             
        ),  
        array(  
            'title' => 'Green CTA Button',  
            'block' => 'a',  
            'classes' => 'cta_button',
            'wrapper' => true,
        ),
        array(  
            'title' => 'H3 with top line rule',  
            'block' => 'h3',  
            'classes' => 'h3_linerule',
            'wrapper' => true,
        ),
    );  
    $init_array['style_formats'] = json_encode( $style_formats );  
     
    return $init_array;  
   
}*/

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// GOOGLE API
	acf_update_setting('google_api_key', 'AIzaSyD4gZZuyh3LgDoqSqkoIwDTBnKar1h11cY');
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register flexbox block
		acf_register_block(array(
			'name'				=> 'carousel',
			'title'				=> __('Carousel Block'),
			'description'		=> __('Displays image carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'carousel', 'photo gallery' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register three column layout block
		acf_register_block(array(
			'name'				=> 'half-and-half-img-text',
			'title'				=> __('Two Column 50/50'),
			'description'		=> __('Two column row with content and background image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'two columns', 'row' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register two third one third block
		acf_register_block(array(
			'name'				=> 'two-third-one-third',
			'title'				=> __('2/3 1/3 Section'),
			'description'		=> __('Displays a two third one third layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'grid' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register flexbox block
		acf_register_block(array(
			'name'				=> 'columns',
			'title'				=> __('Variable Columns Block'),
			'description'		=> __('Displays content in variable columns'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'grid' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register engines block
		acf_register_block(array(
			'name'				=> 'engines',
			'title'				=> __('Featured Engines'),
			'description'		=> __('Lycoming and Continental Engines Section'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'screenoptions',
			'keywords'			=> array( 'google map', 'service centres' ),
		));
		
		// register approved service centres map block
		acf_register_block(array(
			'name'				=> 'services-map',
			'title'				=> __('Approved Services Map Block'),
			'description'		=> __('Shows map of approved service centres'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'location-alt',
			'keywords'			=> array( 'google map', 'service centres' ),
		));
		
		// register testimonials loop block
		acf_register_block(array(
			'name'				=> 'testimonials-loop',
			'title'				=> __('Testimonials Loop Block'),
			'description'		=> __('Shows all testimonials in a masonry layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'testimonial',
			'keywords'			=> array( 'google map', 'service centres' ),
		));
		
		// register approved service centres map block
		acf_register_block(array(
			'name'				=> 'request-a-quote',
			'title'				=> __('Request a Quote Block'),
			'description'		=> __('Request a Quote form'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'list-view',
			'keywords'			=> array( 'google map', 'service centres' ),
		));
		
		// register warranty block
		acf_register_block(array(
			'name'				=> 'warranty',
			'title'				=> __('Industry Warranty Block'),
			'description'		=> __('Covers information on Aerotec&#8319;a Warranty'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'shield-alt',
			'keywords'			=> array( 'google map', 'service centres' ),
		));
		
		// register services section block
		acf_register_block(array(
			'name'				=> 'services',
			'title'				=> __('Services Block'),
			'description'		=> __('List of services'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'services', 'offerings' ),
		));
		
		// register services section block
		acf_register_block(array(
			'name'				=> 'services-home',
			'title'				=> __('Services Home Block'),
			'description'		=> __('List of services'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'services', 'offerings' ),
		));
		
		// register approved service centres map block
		acf_register_block(array(
			'name'				=> 'services-map',
			'title'				=> __('Approved Services Map Block'),
			'description'		=> __('Shows map of approved service centres'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'location-alt',
			'keywords'			=> array( 'google map', 'service centres' ),
		));
		
		// register 50/50 Text & Image block
		acf_register_block(array(
			'name'				=> 'text-image',
			'title'				=> __('50/50 Text & Image'),
			'description'		=> __('WYSIWYG editor and static image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-pull-right',
			'keywords'			=> array( 'text editor', 'static image' ),
		));
		
		// register 50/50 Image & Text block
		acf_register_block(array(
			'name'				=> 'image-text',
			'title'				=> __('50/50 Image & Text'),
			'description'		=> __('WYSIWYG editor and static image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-pull-left',
			'keywords'			=> array( 'text editor', 'static image' ),
		));
		
		/// register Photo Gallery
		acf_register_block(array(
			'name'				=> 'photo-gallery',
			'title'				=> __('Photo Gallery'),
			'description'		=> __('Touch enabled photo gallery'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="792px" height="612px" viewBox="0 0 792 612" enable-background="new 0 0 792 612" xml:space="preserve">
			<path d="M625.5,497.25v19.125c0,31.688-25.688,57.375-57.375,57.375h-459c-31.688,0-57.375-25.688-57.375-57.375v-306  c0-31.688,25.688-57.375,57.375-57.375h19.125v57.375h-11.953c-3.961,0-7.172,3.211-7.172,7.172v291.656  c0,3.961,3.211,7.172,7.172,7.172h444.656c3.961,0,7.172-3.211,7.172-7.172V497.25H625.5z M675.703,95.625H231.047  c-3.961,0-7.172,3.211-7.172,7.172v291.656c0,3.961,3.211,7.172,7.172,7.172h444.656c3.961,0,7.172-3.211,7.172-7.172V102.797  C682.875,98.836,679.664,95.625,675.703,95.625z M682.875,38.25c31.688,0,57.375,25.688,57.375,57.375v306  c0,31.688-25.688,57.375-57.375,57.375h-459c-31.688,0-57.375-25.688-57.375-57.375v-306c0-31.688,25.688-57.375,57.375-57.375  H682.875z M367.312,172.125c0,26.406-21.407,47.812-47.812,47.812s-47.812-21.407-47.812-47.812s21.407-47.812,47.812-47.812  S367.312,145.719,367.312,172.125z M281.25,286.875l47.233-47.233c5.601-5.601,14.683-5.601,20.286,0L396,286.875l123.732-123.733  c5.602-5.601,14.684-5.601,20.286,0l85.481,85.483v95.625H281.25V286.875z"/>
			</svg>',
			'keywords'			=> array( 'slider', 'photo gallery' ),
		));
		
		// register hero slider block
		acf_register_block(array(
			'name'				=> 'heroslider',
			'title'				=> __('Hero Slider'),
			'description'		=> __('Home page carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="792px" height="612px" viewBox="0 0 792 612" enable-background="new 0 0 792 612" xml:space="preserve">
			<path d="M625.5,497.25v19.125c0,31.688-25.688,57.375-57.375,57.375h-459c-31.688,0-57.375-25.688-57.375-57.375v-306  c0-31.688,25.688-57.375,57.375-57.375h19.125v57.375h-11.953c-3.961,0-7.172,3.211-7.172,7.172v291.656  c0,3.961,3.211,7.172,7.172,7.172h444.656c3.961,0,7.172-3.211,7.172-7.172V497.25H625.5z M675.703,95.625H231.047  c-3.961,0-7.172,3.211-7.172,7.172v291.656c0,3.961,3.211,7.172,7.172,7.172h444.656c3.961,0,7.172-3.211,7.172-7.172V102.797  C682.875,98.836,679.664,95.625,675.703,95.625z M682.875,38.25c31.688,0,57.375,25.688,57.375,57.375v306  c0,31.688-25.688,57.375-57.375,57.375h-459c-31.688,0-57.375-25.688-57.375-57.375v-306c0-31.688,25.688-57.375,57.375-57.375  H682.875z M367.312,172.125c0,26.406-21.407,47.812-47.812,47.812s-47.812-21.407-47.812-47.812s21.407-47.812,47.812-47.812  S367.312,145.719,367.312,172.125z M281.25,286.875l47.233-47.233c5.601-5.601,14.683-5.601,20.286,0L396,286.875l123.732-123.733  c5.602-5.601,14.684-5.601,20.286,0l85.481,85.483v95.625H281.25V286.875z"/>
			</svg>',
			'keywords'			=> array( 'heroslider', 'carousel' ),
		));
		
		// register approved service centres map block
		acf_register_block(array(
			'name'				=> 'home',
			'title'				=> __('Home page sections'),
			'description'		=> __('Edit and organize home page content'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'home page', 'content' ),
		));
		
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial Block'),
			'description'		=> __('Add and edit customer testimonials'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'home page', 'content' ),
		));
		
		// Affiliations Block
		acf_register_block(array(
			'name'				=> 'affiliations',
			'title'				=> __('Affiliations Block'),
			'description'		=> __('Add affiliation logos and links'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'home page', 'content' ),
			'supports'			=> array( 'mode' => false, 'anchor' => true ),
		));
		
		// Text Block
		acf_register_block(array(
			'name'				=> 'text',
			'title'				=> __('WYSIWYG Block'),
			'description'		=> __('Basic text editor'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'home page', 'content' ),
		));
	}
}

function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/templates/blocks/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/templates/blocks/content-{$slug}.php") );
	}
}

function add_excerpts_to_cpt() {
    add_post_type_support( 'services', 'excerpt' );
}

function gutenberg_editor_styles() {
	wp_enqueue_style( 'gutenberg-styles', get_stylesheet_directory_uri() . '/css/gutenberg.css', false );
}

// ACTIONS, OPTIONS AND FILTERS
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('init', 'footer_scripts');
add_option( 'my_default_pic', get_stylesheet_directory_uri() . '/img/wood-frame-bg.jpg', '', 'yes' );
add_action( 'widgets_init', 'posts_sidebar' );
add_action( 'widgets_init', 'remove_FooterArea6', 11 );
add_action( 'init', 'add_excerpts_to_cpt' );
add_action( 'enqueue_block_editor_assets', 'gutenberg_editor_styles' );

// SHORTCODES
add_shortcode( 'artists_list', 'artistsLoop' );
add_shortcode( 'artists_list_full', 'artistsLoopFull' );
add_shortcode( 'comedian_list', 'comediansLoopFull' );
add_shortcode( 'sponsor_logos_home', 'sponsorLogos' );
add_shortcode( 'sponsor_page_logos', 'sponsorPageLogos' );
add_shortcode( 'mailchimp_form', 'mailChimpForm' );
add_shortcode( 'sponsor_logos_footer', 'sponsorLogosFooter' );
add_shortcode( 'hero_slider', 'heroSlider' );
add_shortcode( 'service_centres_map', 'serviceCentresMap' );
add_shortcode( 'testimonials_carousel', 'testimonialsHome' );
add_shortcode( 'content_slider', 'contentSlider' );
add_shortcode( 'service_buckets', 'serviceBuckets' );

// CUSTOM THUMBNAIL IN BACKEND
add_filter( 'image_size_names_choose', 'my_custom_sizes' );
// CUSTOM STYLES IN TINY MCE
//add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
//add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

include 'functions/shortcodes.php';
include 'functions/upload-size.php';
include 'functions/gutenberg-block-edits.php';
include 'functions/excerpt.php';
include 'functions/tinymce.php';
include 'functions/google-map-filter.php';