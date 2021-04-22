<?php

require("Abonne.php");
require "AbonneSport.php";
require 'AbonneSportFoot.php';
// $abonne = new Abonne();
// var_dump($abonne); vu que la classe est en asbtract

$abonneSport = new AbonneSport();
$abonneSport->nom='pierre';
$abonneSport->prenom='nina';
$abonneSport->setAge(14);
var_dump($abonneSport);

$abonneSport->createAbonne('entreprise');

$aboSF= new AbonneSportFoot();
var_dump($aboSF);
