<?php

use App\Formulaire;

require "Formulaire.php";

$input1 = new Formulaire();
$formulaire = new Formulaire();
var_dump($input1);





echo "<br>";
$input1->form("post");

$i = 0;
$tbName = ['coucou', 'fff', 'toi'];
$tbValue = ['fifou', 1596, 'jerem'];
$tbType = ['text', 'number', 'text'];
while ($i < count($tbName)) {
    $formulaire->input($tbName[$i], $tbValue[$i], $tbType[$i]);
    $i++;
}
