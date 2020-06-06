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

if(! defined('ABSPATH')){
    die;
}


/**
 * Class KwafodevPlugin
 */
class KwafodevPlugin
{


    /**
     * KwafodevPlugin constructor.
     */
    public function __construct()
    {
        add_action('init',array($this,'custom_post_type'));
    }

    /**
     *   reggister enqueue method
     */
    public function register(){
            add_action('admin_enqueue_scripts',array($this,'enqueue'));
    }

    public function activate(){
        require_once plugin_dir_path(__FILE__).'inc/kwafodev-plugin-activate.php';
        $this->custom_post_type();
        KwafodevPluginActivate::activate();
    }
    public function deactivate(){
        require_once plugin_dir_path(__FILE__).'inc/kwafodev-plugin-deactivate.php';
        KwafodevPluginDeactivate::deactivate();
    }
    /**
     *custom post_type method
     */
    public function custom_post_type(){
        register_post_type('book',['public' =>true, 'label'=>'Books']);
   }

    /**
     *external files for plugin
     */
    public function enqueue(){
        //enqueue all scripts
       wp_enqueue_style('mypluginstyle',plugins_url('/assets/mysite.css',__FILE__));
       wp_enqueue_script('mypluginstyle',plugins_url('/assets/myscript.js',__FILE__));
   }
}

//instantiate class
if( class_exists('KwafodevPlugin')){
    $kwafodevPlugin = new KwafodevPlugin();
    $kwafodevPlugin->register();
}
//activation

register_activation_hook(__FILE__, array($kwafodevPlugin,'activate'));

//deactivation

register_deactivation_hook(__FILE__, array($kwafodevPlugin,'deactivate'));


