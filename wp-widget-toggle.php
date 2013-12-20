<?php
/*
Plugin Name: WP Widget Toggle
Plugin URI: https://github.com/nciske/WPWidgetToggle
Description: WP Widget Toggler
Author: Nick Ciske (ThoughtRefinery)
Version: 1.0
Author URI: http://thoughtrefinery.com/
*/

if ( !function_exists( 'add_action' ) ) {
	echo "Hi there!  I'm just a plugin, not much I can do when called directly.";
	exit;
}

add_action('wp_enqueue_scripts','wp_widget_toggle');

function wp_widget_toggle(){
	wp_enqueue_script('wp_widget_toggle', plugins_url('/js/wp-widget-toggle.js', __FILE__), array('jquery'), true);
}