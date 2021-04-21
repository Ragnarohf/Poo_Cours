<?php
class Voiture
{
    private static $marque = 'mini';
    private static $couleur = 'rouge';
    private static $distance = 2000;
    private static $temps = 100;
    // public function __construct(string $marque, string $couleur, int $distance, int $temps)
    // {
    //     $this->marque = $marque;
    //     $this->couleur = $couleur;
    //     $this->distance = $distance;
    //     $this->temps = $temps;
    // }
    // acceseurs marque
    public static function getMarque()
    {
        return self::$marque;
    }
    public static function setMarque($marque): self
    {
        self::$marque = $marque;
        return self::$marque;
    }
    // acceseurs couleur
    public static function getCouleur()
    {
        return self::$couleur;
    }
    public static function setCouleur($couleur): self
    {
        self::$couleur = $couleur;
        return self::$couleur;;
    }
    // acceseurs distance
    public static function getDistance()
    {
        return self::$distance;
    }
    public static  function setDistance($distance): self
    {
        self::$distance = $distance;
        return self::$distance;
    }
    // acceseurs temps
    public static  function getTemps()
    {
        return self::$temps;
    }
    public static function setTemps($temps): self
    {
        self::$temps = $temps;
        return self::$temps;
    }

    //methodes

    private static function calculVitesse()
    {
        $vitesse = self::$distance / self::$temps;
        return $vitesse;
    }


    public static function afficheVitesse()
    {
        $vitesse = self::calculVitesse();

        echo "vitesse de la voiture" .  self::$marque . " de la couleur" . self::$couleur . " est de $vitesse km/h";
    }

    public static function afficheDistance()
    {
        echo "Distance parcourue par la voiture" . self::$distance . "km";
    }
}
