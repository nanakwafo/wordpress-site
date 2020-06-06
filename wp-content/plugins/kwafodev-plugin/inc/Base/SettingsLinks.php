<?php
/**
 * @package MysitePlugin
 */

namespace Inc\Base;
class SettingsLinks
{

    public $plugin;


    public function __construct()
    {

        $this->plugin = PLUGIN; //plugin name
    }
    public function register(){
        add_filter('plugin_action_links_'.$this->plugin,array($this,'settings_link'));
    }
    public function settings_link($links){
        //add custom settings link
        $settings_link ='<a href="admin.php?page=kwafodev_plugin">Setting</a>';
        array_push($links,$settings_link);
        return $links;
    }
}