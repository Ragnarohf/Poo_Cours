<?php
require 'Abonne.php';


use App\Abonne;
use App\Maison;

$abo = new Abonne();
$abo->seDeplacer();
echo "<br>";
$abo->allumer();
echo "<br>";
$abo->lireJournal();
echo "<br>";
$abo->ecrireJournal();
echo '<br>';
echo $abo::NUMERO;
