<?php
/*
Plugin Name: UCF Map Points
Description: Provides a Custom Post Type for storing map points and meta data related to them.
Version: 0.0.0
Author: UCF Web Communications
License: GPL3
GitHub Plugin URI: UCF/UCF-Map-Points
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'UCF_MAP_POINT__PLUGIN_FILE', __FILE__ );
define( 'UCF_MAP_POINT__STATIC_URL', plugins_url( 'static' ) );
define( 'UCF_MAP_POINT__CSS_URL', UCF_MAP_POINT__STATIC_URL . '/css' );
define( 'UCF_MAP_POINT__JS_URL', UCF_MAP_POINT__STATIC_URL . '/js' );

include_once 'includes/ucf-map-point-post-type.php';

if ( ! function_exists( 'ucf_map_point_on_activation' ) ) {
	function ucf_map_point_on_activation() {
		UCF_Map_Point_Post_Type::register_post_type();
		flush_rewrite_rules();
	}

	register_activation_hook( 'ucf_map_point_on_activation', UCF_MAP_POINT__PLUGIN_FILE );
}

if ( ! function_exists( 'ucf_map_point_on_deactivation' ) ) {
	function ucf_map_point_on_deactivation() {
		flush_rewrite_rules();
	}

	register_deactivation_hook( 'ucf_map_point_on_deactivation', UCF_MAP_POINT__PLUGIN_FILE );
}

if ( ! function_exists( 'ucf_map_point_init' ) ) {
	function ucf_map_point_init() {
		add_action( 'init', array( 'UCF_Map_Point_Post_Type', 'register_post_type' ), 10, 0 );
	}

	add_action( 'plugins_loaded', 'ucf_map_point_init', 10, 0 );
}
