<?php
/**
 * @package MysitePlugin
 */

class KwafodevPluginActivate
{


    public static function activate(){

        flush_rewrite_rules();
    }
}