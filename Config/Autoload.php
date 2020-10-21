<?php
namespace config;

class autoload{
    public static function Start()
    {
        spl_autoload_register(function($className)
        {
            $classPath=dirname(__DIR__)."/".str_replace("\\","/",$className);
            include_once($classPath);
        });
    }
}
?>