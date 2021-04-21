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


var_dump(($abonne));

$abonne->createAbonne('entreprise');
//////////////// object employe ////////////////
$employe = new Employe();
// $employe->nom = 'Nicouette';
$employe->setNom('Nicouette');
//$employe->prenom = 'Sandra';
$employe->setPrenom('Sandra');
$employe->sexe = 'femme';
$employe->age = 20;
//$employe->salaire = 2145;
$employe->setSalaire(17);

var_dump(($employe));
$employe->afficheInfo();
echo '<br>';
//$employe->calculPrime();
$employe->afficheSalaire();

//////////////// object abonne another  ////////////////
$moi = new Abonne();
var_dump($moi);
