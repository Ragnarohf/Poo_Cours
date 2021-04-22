<?php



require "banque/Compte.php";
require "banque/CompteCourrant.php";
require "banque/CompteEpargne.php";
require "client/Compte.php";


use App\banque\CompteCourrant;
use App\banque\CompteEpargne;
use App\Client\Compte as CompteClient;
// $compte = new Compte("mathieu", 2000);
// var_dump($compte);

// $compte->afficheSolde();
// $compte->retirerArgent(-3000);
// $compte->deposerArgent(300);

// $compteCourrant = new CompteCourrant("joseph", 5000);
// var_dump($compteCourrant);
// $compteEpargne = new CompteEpargne("joseph", 5000);
// var_dump($compteEpargne);
// $compteEpargne->calculInteret(5000);

$compteCourrant = new CompteCourrant("mathieu", 1400, 300);
var_dump($compteCourrant);
$compteCourrant->afficheSolde();
$compteCourrant->retirerArgent(1400);
CompteEpargne::afficheBanque();

$compteE = new CompteEpargne('jeremy', 400, 0);
$compteClient = new CompteClient("le ouistiti", "jeremy", 21, $compteE);

// retirer de l'argent du compte Epargne du client
$compteClient->compteEpargne->retirerArgent(330);
