<?php

use App\Autoloader;
use App\Table;
use App\Voiture;

require "Autoloader.php";
// require "Table.php";
// require "Voiture.php";
Autoloader::register();

$table = new Table();
$voiture = new Voiture();
