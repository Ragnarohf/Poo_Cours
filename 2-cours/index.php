<?php
require("Abonne.php");
require("Voiture.php");

$monAbonne = new Abonne("Nicouette", "Sandra", 45);
// $monAbonne->nom = 'toto';
var_dump($monAbonne);
// michel nina 17
$monAbonne->nom = "michel";
$monAbonne->prenom = "nina";
$monAbonne->setAge = 17;
var_dump($monAbonne);

$voiture = new Voiture("audi", 'rose', 45, 30);

var_dump($voiture);
$voiture->afficheVitesse();
echo "<br>";
$voiture->afficheDistance();
