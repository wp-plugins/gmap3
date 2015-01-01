<?
/*
Plugin Name: gmap3
Plugin URI: http://www.ramoonus.nl/wordpress/gmap3/
Description: A JQuery plugin to create google maps with advanced features (overlays, clusters, callbacks, events...)
Version: 6.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPLv3
*/

function rw_gmap3_init() {
		// Google Maps API v3
		wp_deregister_script('googlemapsapi3');
		wp_enqueue_script('googlemapsapi3', 'http://maps.google.com/maps/api/js?sensor=false', false, '3', false); ;
		// gmap
		wp_deregister_script('gmap3');
		wp_enqueue_script('gmap3', plugins_url('/js/gmap3.min.js',__FILE__), array('jquery'), '6.0.0');
}    
add_action('init', 'rw_gmap3_init');
?>