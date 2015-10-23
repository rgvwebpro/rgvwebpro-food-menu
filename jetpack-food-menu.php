<?php
/*
Plugin Name: RGVWEBPRO Food Menu
Plugin URI:  https://github.com/rgvwebpro/rgvwebpro-food-menu
Description: Add food menus to your theme by using this plugin. Needs Jetpack to work.
Version:     0.1-alpha
Author:      RGVWEBPRO
Author URI:  http://rgvwebpro.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: rgvwebpro_food_menu
This is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
RSS by RGVWEBPRO is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with RSS by RGVWEBPRO. If not, see {License URI}.
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
