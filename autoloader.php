<?php 

class Autoloader{
    static function register(){
        spl_autoload_register(array(__CLASS__, "autoloding"));
    }

    static function autoloding($class_name){
        require $class_name . ".php";
    }
}