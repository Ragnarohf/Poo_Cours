<?php
class Animal
{
    const MAMMIFERE = "chien";
    public static $nom = "mathieu";

    public function afficheAnimal()
    {
        echo "l'aninmal est un " . $this::MAMMIFERE;
    }
}
