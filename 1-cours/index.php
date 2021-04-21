<?php
//instanciation 
require("Abonne.php");
require("Employe.php");
$abonne = new Abonne();
// public 
$abonne->nom = 'pierre';
$abonne->prenom = 'nina';
$abonne->age = 14;

var_dump(($abonne));

$abonne->createAbonne('entreprise');

$employe = new Employe();
$employe->nom = 'sandra';
$employe->prenom = 'nicouette';
$employe->sexe = 'femme';
$employe->age = 20;
$employe->salaire = 2145;

var_dump(($employe));
$employe->afficheInfo();
$employe->calculPrime();
$employe->afficheSalaire();
