<?php
require "Compte.php";

$compte = new Compte("mathieu", 2000);
var_dump($compte);

$compte->afficheSolde();
$compte->retirerArgent(-3000);
$compte->deposerArgent(300);
