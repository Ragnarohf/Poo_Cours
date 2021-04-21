<?php
require("Voiture.php");
$voiture = new Voiture("mini", 'rouge', 2000, 100);

var_dump($voiture);
$voiture->afficheVitesse();
echo "<br>";
$voiture->afficheDistance();
