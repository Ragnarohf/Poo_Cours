<?php

use App\Formulaire;

require('Formulaire.php');


$formulaire = new Formulaire("nom", "mathieu", "text");
var_dump($formulaire);

$formulaire->input();
$formulaire->submit('send');
