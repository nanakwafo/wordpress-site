<?php
/**
 * @package MysitePlugin
 */

class KwafodevPluginDeactivate
{
    public static function deactivate(){
        flush_rewrite_rules();
    }

}