<?php

namespace App;

class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            "autoload"
        ]);
    }
    static function autoload($classe)
    {
        // echo $classe;
        $classe = str_replace(__NAMESPACE__ . "\\", "", $classe);
    }
}
