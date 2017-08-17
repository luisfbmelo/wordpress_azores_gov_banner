<?php
/**
* Plugin Name: Azores Gov Banner
* Description: A custom plugin to enable Azores Gov Banner
* Version: 1.0
* Author: Luis Melo
* Author URI: http://luisfbmelo.com/
**/

define( 'AZORESGOVBANNER__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'AZORESGOVBANNER__PLUGIN_URL', plugin_dir_url( __FILE__ ) );

add_action('init', 'init_gov_banner');

//	Init header action
function init_gov_banner(){
	add_action('wp_head', 'add_gov_banner');
	add_action('wp_enqueue_scripts', 'assets');
}

//	Add assets
function assets(){
	wp_enqueue_style('azoresgov/css', plugin_dir_url(__FILE__) . 'assets/css/style.css', false, null);
}


//	Add view with HTML
function add_gov_banner(){
	include(AZORESGOVBANNER__PLUGIN_DIR . 'views/banner.php');
}