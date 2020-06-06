<?php
/**
 * @package MysitePlugin
 */

/*
 Plugin Name: kwafodev-plugin
 Plugin URI: https://kwafonanadev.co.uk/
 Description: This is my first attempt in creating custom plugin in wordpress
 Version: 1.0.0
 Author: Kwafo nana Mensah
 Aurthor URI: https://kwafonanadev.co.uk/
 License:GPLv2
 Text Domain: kwafodev-plugin
 */


/**
 * If this file is called directly, abort!!
 */
if(! defined('ABSPATH')){
    die;
}
/**
 * Require once the Composer Autoload
 */
if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}
/**
 * define constants
 */
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL',plugin_dir_url(__FILE__));
define('PLUGIN',plugin_basename(__FILE__));

use Inc\Base\Activate;
use Inc\Base\Deactivate;

/**
 * The code that runs during plugin activation
 */
function activatekwafodevplugin(){
    Activate::activate();
}
/**
 * The code that runs during plugin deactivation
 */
function deactivatekwafodevplugin(){
    Deactivate::deactivate();
}
register_activation_hook(__FILE__, 'activatekwafodevplugin');
register_deactivation_hook(__FILE__, 'deactivatekwafodevplugin');


/**
 * execute the base service
 */
if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}