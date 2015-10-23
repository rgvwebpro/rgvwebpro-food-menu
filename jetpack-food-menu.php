<?php
/*
Plugin Name: RGVWEBPRO Food Menu
Plugin URI: https://github.com/rgvwebpro/rgvwebpro-food-menu
Description: Add food menus to your theme by using this plugin. Needs Jetpack to work.
Author: RGVWEBPRO
Version: 1.6
Author URI: http://rgvwebpro.com/
*/

//  Custom Post Type - Food Menu
//  https://jetpack.me/support/custom-content-types/

//  Using the following help guide
//  https://github.com/Automattic/jetpack/issues/894

// Setup the function
function rgvwebpro_fm_plugin_jetpack_setup() {
    add_theme_support( 'nova_menu_item' );
}
add_action( 'after_setup_theme', 'rgvwebpro_fm_plugin_jetpack_setup' );
