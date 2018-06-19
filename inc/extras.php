<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function candles_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'candles_body_classes' );

function candles_login_logo() {
	echo '<style>
		#login h1 a {
			background: url(' . get_template_directory_uri() . '/images/black_logo.svg) no-repeat !important;
			background-size: 300px 53px !important; width: 300px !important; height: 53px !important;

		}
		#login .button.button-primary {
			background-color: #01C4D3;
			box-shadow:none;
			text-shadow: none;
			border: none;
		}
	</style>';
}
add_action( 'login_head', 'candles_login_logo' ); //(hook, function name)


function quotes_login_logo_url($url) { //argument is previous url
    return home_url(); //index.html

}
add_filter( 'login_headerurl', 'quotes_login_logo_url' ); //(filter name, function name)