<?php
//instanciation 
require("Abonne.php");
$abonne = new Abonne();
// public 
$abonne->nom = 'pierre';
$abonne->prenom = 'nina';
$abonne->nom = 14;

var_dump(($abonne));

$abonne->createAbonne();
