<?php
//instanciation 
require("Abonne.php");
require("Employe.php");

$abonne = new Abonne();
// public 
$abonne->nom = 'pierre';
$abonne->prenom = 'nina';
// $abonne->age = 14;
$abonne->setAge(17);
$abonne->getAge();

var_dump(($abonne));

$abonne->createAbonne('entreprise');

$employe = new Employe();
$employe->nom = 'Nicouette';
$employe->prenom = 'Sandra';
$employe->sexe = 'femme';
$employe->age = 20;
$employe->salaire = 2145;

var_dump(($employe));
$employe->afficheInfo();
echo '<br>';
//$employe->calculPrime();
$employe->afficheSalaire();
