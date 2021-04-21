<?php
require("Animal.php");
echo Animal::MAMMIFERE;

$animal = new Animal();
echo '<br>';
$animal->afficheAnimal();
echo '<br>';
echo $animal::$nom;
