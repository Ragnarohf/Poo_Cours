<?php
require 'Abonne.php';


use App\Abonne;
use App\Maison;

$abo = new Abonne();
$abo->seDeplacer();
echo "<br>";
$abo->allumer();
