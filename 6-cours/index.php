<?php
require "Compte.php";

$compte = new Compte("dédé", 1500);
var_dump($compte);

$compte->afficheSolde();
