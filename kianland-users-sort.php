<?php

/*
Plugin Name: Kianland Users Sorting
Plugin URI: https://kianland.com/users-sorting
Description: This plugin used for users sorting.
Version: 1.0.0
Author: Kianland
Author URI: https://kianland.com
License: GPLv2 or later
Text Domain: kianland-users-sort
*/

require_once 'vendor/autoload.php';

use KianlandUsersSort\Plugin;

if ( class_exists( 'KianlandUsersSort\Plugin' ) ) {
	$plugin = new Plugin();
}

register_activation_hook( __FILE__, [ $plugin, 'activate' ] );

register_deactivation_hook( __FILE__, [ $plugin, 'deactivate' ] );