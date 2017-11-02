<?php
/**
* Plugin Name: Azores Gov Banner
* Description: A custom plugin to enable Azores Gov Banner
* Version: 1.0
* Author: Luis Melo
* Author URI: http://luisfbmelo.com/
**/

define( 'AZGB__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'AZGB__PLUGIN_URL', plugin_dir_url( __FILE__ ) );

add_action('init', 'init_gov_banner');

//	Init header action
function AZGB_init(){
	add_action('wp_head', 'AZGB_add_banner');
	add_action('wp_enqueue_scripts', 'AZGB_assets');
}

//	Add assets
function AZGB_assets(){
	wp_enqueue_style('azoresgov/css', plugin_dir_url(__FILE__) . 'assets/css/style.css', false, null);
}


//	Add view with HTML
function AZGB_add_banner(){
	include(AZGB__PLUGIN_DIR . 'views/banner.php');
}