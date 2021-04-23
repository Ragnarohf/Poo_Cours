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

        $classe = str_replace(__NAMESPACE__ . "\\", "", $classe);
        $classe = str_replace("\\", "/", $classe);
        $classe = $classe . '.php';


        $fichier = __DIR__ . "/" . $classe;
        require $fichier;
    }
}
