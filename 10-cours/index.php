<?php

use App\Autoloader;
use App\Model\Model;
use App\Model\ModelLivre;

require "Autoloader.php";
Autoloader::register();
$livre = new ModelLivre();
var_dump($livre->findAll());