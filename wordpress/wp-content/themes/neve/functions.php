<?php
/**
 * Neve functions.php file
 *
 * Author:          Andrei Baicus <andrei@themeisle.com>
 * Created on:      17/08/2018
 *
 * @package Neve
 */

define( 'NEVE_VERSION', '2.7.1' );
define( 'NEVE_INC_DIR', trailingslashit( get_template_directory() ) . 'inc/' );
define( 'NEVE_ASSETS_URL', trailingslashit( get_template_directory_uri() ) . 'assets/' );

if ( ! defined( 'NEVE_DEBUG' ) ) {
	define( 'NEVE_DEBUG', false );
}
define( 'NEVE_NEW_DYNAMIC_STYLE', true );
/**
 * Themeisle SDK filter.
 *
 * @param array $products products array.
 *
 * @return array
 */
function neve_filter_sdk( $products ) {
	$products[] = get_template_directory() . '/style.css';

	return $products;
}

add_filter( 'themeisle_sdk_products', 'neve_filter_sdk' );

add_filter( 'themeisle_onboarding_phprequired_text', 'neve_get_php_notice_text' );

/**
 * Get php version notice text.
 *
 * @return string
 */
function neve_get_php_notice_text() {
	$message = sprintf(
	/* translators: %s message to upgrade PHP to the latest version */
		__( "Hey, we've noticed that you're running an outdated version of PHP which is no longer supported. Make sure your site is fast and secure, by %s. Neve's minimal requirement is PHP 5.4.0.", 'neve' ),
		sprintf(
		/* translators: %s message to upgrade PHP to the latest version */
			'<a href="https://wordpress.org/support/upgrade-php/">%s</a>',
			__( 'upgrading PHP to the latest version', 'neve' )
		)
	);

	return wp_kses_post( $message );
}

/**
 * Adds notice for PHP < 5.3.29 hosts.
 */
function neve_php_support() {
	printf( '<div class="error"><p>%1$s</p></div>', neve_get_php_notice_text() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

if ( version_compare( PHP_VERSION, '5.3.29' ) <= 0 ) {
	/**
	 * Add notice for PHP upgrade.
	 */
	add_filter( 'template_include', '__return_null', 99 );
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] ); // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	add_action( 'admin_notices', 'neve_php_support' );

	return;
}

require_once 'globals/migrations.php';
require_once 'globals/utilities.php';
require_once 'globals/hooks.php';
require_once 'globals/sanitize-functions.php';
require_once get_template_directory() . '/start.php';


require_once get_template_directory() . '/header-footer-grid/loader.php';



// //contact us button 
// add_action( 'admin_menu', 'linked_url' );
// function linked_url() {
//     add_menu_page( 'linked_url', 'Contact us', 'read', 'my_slug', '', 'dashicons-text', 1 );
// }

// add_action( 'admin_menu' , 'linkedurl_function' );
// function linkedurl_function() {
//     global $menu;
//     $menu[1][2] = "http://localhost/wordpress/wp-admin/admin.php?page=formidable-entries&form=1&frm_action=list&_wpnonce=8d8d471b2c&_wp_http_referer&paged=1";
// }
// // //refill request button 

// add_action( 'admin_menu', 'linked_url_a' );
// function linked_url_a() {
//     add_menu_page( 'linked_url_a', 'Refill request', 'read', 'my_slug', '', 'dashicons-text', 1 );
// }

// add_action( 'admin_menu' , 'linkedurl_function_a' );
// function linkedurl_function_a() {
//     global $menu;
//     $menu[1][2] = "http://localhost/wordpress/wp-admin/admin.php?page=formidable-entries&form=2&frm_action=list&_wpnonce=8d8d471b2c&_wp_http_referer&paged=1";
// }
// // //transfer request button 

// add_action( 'admin_menu', 'linked_url_b' );
// function linked_url_b() {
//     add_menu_page( 'linked_url_a', 'transfer prescription', 'read', 'my_slug', '', 'dashicons-text', 1 );
// }

// add_action( 'admin_menu' , 'linkedurl_function_b' );
// function linkedurl_function_b() {
//     global $menu;
//     $menu[1][2] = "http://localhost/wordpress/wp-admin/admin.php?page=formidable-entries&form=3&frm_action=list&_wpnonce=8d8d471b2c&_wp_http_referer&paged=1";
// }

add_action('admin_menu', 'wpso_custom_links_admin_menu');
function wpso_custom_links_admin_menu() {
    global $submenu;
    $submenu['index.php'][] = array( 'contact us', 'read', 'http://localhost/wordpress/wp-admin/admin.php?page=formidable-entries&form=1&frm_action=list&_wpnonce=c1a852555e&_wp_http_referer&paged=1' );

    $submenu['index.php'][] = array( 'refil request', 'read', 'http://localhost/wordpress/wp-admin/admin.php?page=formidable-entries&form=3&frm_action=list&_wpnonce=c1a852555e&_wp_http_referer&paged=1' );
    
    $submenu['index.php'][] = array( 'transfer prescription', 'read', 'http://localhost/wordpress/wp-admin/admin.php?page=formidable-entries&form=2&frm_action=list&_wpnonce=8d8d471b2c&_wp_http_referer&paged=1' );
}