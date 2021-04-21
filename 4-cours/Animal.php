<?php
class Animal
{
    const MAMMIFERE = "chien";
    private static $nom = "mathieu";
    // acceseurs nom

    public static function getNom()
    {

        return self::$nom;
    }
    public static function setNom($nom)
    {
        self::$nom = $nom;
        return self::$nom;
    }

    public static function afficheAnimal()
    {
        echo "l'aninmal est un " . self::MAMMIFERE;
        echo "<br>";
        echo "le nom de l'animal est " . self::$nom;
    }
}
