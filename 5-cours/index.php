<?php

require("Abonne.php");
require "AbonneSport.php";
require 'AbonneSportFoot.php';
//$abonne = new Abonne();
// var_dump($abonne); vu que la classe est en asbtract
//$abonne-> setAge(17);
$abonneSport = new AbonneSport("charles", "dede", 'natation');
$abonneSport->nom = 'pierre';
$abonneSport->prenom = 'nina';

// $abonneSport->setType("mon foot");
var_dump($abonneSport);

$abonneSport->createAbonne('entreprise');

$aboSF = new AbonneSportFoot("charle", "dede", 'foot', "bleu");
var_dump($aboSF);
