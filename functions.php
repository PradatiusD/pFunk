<?php
/* Do not remove this line. Add your functions below. */


//* Remove Genesis hmlt5 shiv and add Modernizr instead
remove_action( 'wp_head', 'genesis_html5_ie_fix' );
add_action( 'wp_head', 'add_mondernizr' );
function add_mondernizr() {
 
  if ( ! genesis_html5() )
		return;
 
	echo '<script src="' . get_stylesheet_directory_uri() . '/js/modernizr.js"></script>' . "\n";
 
}
//* Reposition the breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_after_endwhile', 'genesis_do_breadcrumbs' );


/*  Trim Excerpts of [...] */
function new_excerpt_more( $excerpt ) {
	return str_replace( '[…]', ' �', $excerpt );
}
add_filter( 'wp_trim_excerpt', 'new_excerpt_more' );

//* Load External JS File
add_action( 'get_header', 'custom_enqueue_scripts' );
/**
 * Enqueue an external Custom Javascript file to Dynamik Website Builder
 */
function custom_enqueue_scripts()
{
    wp_enqueue_script( 'my-scripts', dynamik_get_stylesheet_location( 'url' ) . 'js/2urn.js', false, CHILD_THEME_VERSION, true );
}  


add_filter( 'genesis_search_button_text', 'search_button_txt_2urn' );
function search_button_txt_2urn() {
	return "�";
}

add_filter( 'genesis_search_text', 'search_form_text_2urn' );
function search_form_text_2urn() {
	return "search";
}
//* Move the submenu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_before_loop', 'genesis_do_subnav' );

//* Customize the newer posts link
add_filter ( 'genesis_newer_link_text' , 'sp_newer_posts_link' );
function sp_newer_posts_link ( $text ) {
	return g_ent( '� ' ) . __( 'Custom Newer Posts Link', CHILD_DOMAIN );
}

//* Customize the older posts link
add_filter ( 'genesis_older_link_text' , 'sp_older_posts_link' );
function sp_older_posts_link ( $text ) {
	return g_ent( '� ' ) . __( 'Custom Older Posts Link', CHILD_DOMAIN );
}

//* Customize the prev page link

add_filter ( 'genesis_prev_link_text' , 'sp_previous_page_link' );
function sp_previous_page_link ( $text ) {
	return g_ent( '� ' ) . __( '', CHILD_DOMAIN );
}

//* Customize the next page link
add_filter ( 'genesis_next_link_text' , 'sp_next_page_link' );
function sp_next_page_link ( $text ) {
	return g_ent( '� ' ) . __( '', CHILD_DOMAIN );
}
