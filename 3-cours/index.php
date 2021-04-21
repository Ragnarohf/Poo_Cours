<?php
require("Voiture.php");
$voiture = new Voiture("audi", 'rose', 45, 30);

var_dump($voiture);
$voiture->afficheVitesse();
echo "<br>";
$voiture->afficheDistance();
