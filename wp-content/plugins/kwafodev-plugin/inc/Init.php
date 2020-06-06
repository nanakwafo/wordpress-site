<?php
/**
 * @package MysitePlugin
 */
namespace Inc;
final class Init
{

    /**
     * store all the classes inside an array
     * @return string[]
     */
    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class,
        ];
    }


    /**
     * Loop through the classes, initialize them and call the register() method if it exit
     * @return
     */
    public static function register_services()
     {
         foreach (self::get_services() as  $class){
              $service = self::instantiate($class);
              if(method_exists($service,'register')){
                  $service->register();
              }


         }
     }

    /**
     * initialize the class
     * @param $class
     * @return mixed
     *
     */
    private static function instantiate($class)
    {
        $service =new $class();
        return $service;
    }
}



//use Inc\Activate;
//use Inc\Deactivate;
///**
// * Class KwafodevPlugin
// */
//
//class KwafodevPlugin
//{
//    public $plugin;
//
//    /**
//     * KwafodevPlugin constructor.
//     */
//    public function __construct()
//    {
//        add_action('init',array($this,'custom_post_type'));
//        $this->plugin = plugin_basename(__FILE__); //plugin name
//    }
//
//    /**
//     *   reggister  method
//     */
//    public function register(){
//        add_action('admin_enqueue_scripts',array($this,'enqueue'));
//        add_action('admin_menu', array($this,'add_admin_pages'));
//        add_filter('plugin_action_links_'.$this->plugin,array($this,'settings_link'));
//    }
//
//    /**
//     * @param $links
//     * @return mixed
//     */
//    public function settings_link($links){
//        //add custom settings link
//        $settings_link ='<a href="admin.php?page=kwafodev_plugin">Setting</a>';
//        array_push($links,$settings_link);
//        return $links;
//    }
//    /**
//     * admin pages method
//     */
//    public function  add_admin_pages(){
//        add_menu_page('Kwafodev Plugin','Kwafodev','manage_options','kwafodev_plugin',array($this,'admin_index'),'dashicons-menu',110);
//    }
//
//    public  function admin_index(){
//        //require templates
//        require_once plugin_dir_path(__FILE__).'templates/admin.php';
//    }
//    /**
//     * activation method
//     */
//    public function activate(){
//        // require_once plugin_dir_path(__FILE__).'inc/Activate.php';
//        $this->custom_post_type();
//        Activate::activate();
//    }
//
//    /**
//     *deactivation method
//     */
//    public function deactivate(){
//        //  require_once plugin_dir_path(__FILE__).'inc/Deactivate.php';
//        Deactivate::deactivate();
//    }
//    /**
//     *custom post_type method
//     */
//    public function custom_post_type(){
//        register_post_type('book',['public' =>true, 'label'=>'Books']);
//    }
//
//    /**
//     *external files for plugin
//     */
//    public function enqueue(){
//        //enqueue all scripts
//        wp_enqueue_style('mypluginstyle',plugins_url('/assets/main.css',__FILE__));
//        wp_enqueue_script('mypluginstyle',plugins_url('/assets/main.js',__FILE__));
//    }
//}
//
////instantiate class
//if( class_exists('KwafodevPlugin')){
//    $kwafodevPlugin = new KwafodevPlugin();
//    $kwafodevPlugin->register();
//}
////activation
//
//register_activation_hook(__FILE__, array($kwafodevPlugin,'activate'));
//
////deactivation
//
//register_deactivation_hook(__FILE__, array($kwafodevPlugin,'deactivate'));
//

