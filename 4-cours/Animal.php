<?php
class Animal
{
    const MAMMIFERE = "chien";
    public static $nom;

    public function afficheAnimal()
    {
        echo "l'aninmal est un " . $this::MAMMIFERE;
    }
}
