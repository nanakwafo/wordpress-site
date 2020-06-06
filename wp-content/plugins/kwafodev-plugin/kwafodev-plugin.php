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
 * The code that runs during plugin activation
 */
function activatekwafodevplugin(){
    Inc\Base\Activate::activate();
}
/**
 * The code that runs during plugin deactivation
 */
function deactivatekwafodevplugin(){
    Inc\Base\Deactivate::deactivate();
}
register_activation_hook(__FILE__, 'activatekwafodevplugin');
register_deactivation_hook(__FILE__, 'deactivatekwafodevplugin');


/**
 * execute the base service
 */
if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}