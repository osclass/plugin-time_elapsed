<?php
/*
Plugin Name: Time elapsed
Plugin URI: http://www.osclass.org/
Description: This plugin shows the times takes to render each page.
Version: 1.0.1
Author: OSClass
Author URI: http://www.osclass.org/
Plugin update URI: time-elapsed
*/


$timer = null;

function time_elapsed_header() {
	global $timer;
	$timer = microtime();
}

function time_elapsed_footer() {
	global $timer;
	echo '<!-- time to load: ', microtime() - $timer , ' -->', PHP_EOL;
}

osc_register_plugin(osc_plugin_path(__FILE__), '');
osc_add_hook('footer', 'time_elapsed_footer');
osc_add_hook('header', 'time_elapsed_header');

