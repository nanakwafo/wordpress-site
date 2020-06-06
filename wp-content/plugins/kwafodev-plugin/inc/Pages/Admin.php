<?php
/**
 * @package MysitePlugin
 */
namespace Inc\Pages;
class Admin{
    function __construct()
    {
    }
    public function  register(){
        add_action('admin_menu', array($this,'add_admin_pages'));
    }
    public function  add_admin_pages(){
        add_menu_page('Kwafodev Plugin','Kwafodev','manage_options','kwafodev_plugin',array($this,'admin_index'),'dashicons-menu',110);
    }
    public  function admin_index(){
        //require templates
        require_once PLUGIN_PATH.'templates/admin.php';
    }
}