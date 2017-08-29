<?php


class Autoloader{

    public static function register()
    {
      spl_autoload_register(array(__CLASS__,'autoload'));
    }

    static function autoload($class){
        if(file_exists(CORE.DS.$class.'.php')){
             require CORE.DS.$class.'.php';
        }else{
            require MODEL.DS.$class.'.php';
        }
    }
}
