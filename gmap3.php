<?
/*
Plugin Name: gmap3
Plugin URI: http://www.ramoonus.nl/wordpress/gmap3/
Description: A JQuery plugin to create google maps with advanced features (overlays, clusters, callbacks, events...)
Version: 4.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/
/* Javascript declarations for init */
function rw_gmap3_init() {
		// Google Maps API v3
		wp_deregister_script('googlemapsapi3');
		wp_register_script('googlemapsapi3', 'http://maps.google.com/maps/api/js?sensor=false', false, '3', false); 
		wp_enqueue_script('googlemapsapi3');
		// gmap itself
		wp_deregister_script('gmap3');
		wp_register_script('gmap3', plugins_url('/js/gmap3.js',__FILE__), array('jquery'), '4.0'); 
		wp_enqueue_script('gmap3');
}    
add_action('init', 'rw_gmap3_init');
?>