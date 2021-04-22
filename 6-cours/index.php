<?php
require "Compte.php";
require "CompteCourrant.php";
require "CompteEpargne.php";

$compte = new Compte("mathieu", 2000);
var_dump($compte);

$compte->afficheSolde();
$compte->retirerArgent(-3000);
$compte->deposerArgent(300);

$compteCourrant = new CompteCourrant("joseph", 5000);
var_dump($compteCourrant);
$compteEpargne = new CompteEpargne("joseph", 5000, 3);
var_dump($compteEpargne);
