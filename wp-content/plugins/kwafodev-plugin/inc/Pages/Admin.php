<?php
/**
 * @package MysitePlugin
 */
namespace Inc\Pages;
use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

class Admin extends BaseController{
    public $settings;
    public function __construct()
    {
        $this->settings= new SettingsApi();
    }

    public function  register(){

        $pages=[
            [
            'page_title'=>   'Kwafodev Plugin',
            'menu_title'=>  'Kwafodev',
            'capability'=> 'manage_options',
            'menu_slug'=> 'kwafodev_plugin',
            'callback'=> function(){echo '<h1>plugin</h1>';},
            'icon_url'=> 'dashicons-menu',
            'position'=> 110
          ]
            //different admin menu

        ];
        $this->settings->addPages($pages)->register();
    }

}