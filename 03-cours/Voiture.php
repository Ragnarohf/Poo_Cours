<?php
class Voiture
{
    private $marque;
    private $couleur;
    private $distance;
    private $temps;
    public function __construct(string $marque, string $couleur, int $distance, int $temps)
    {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->distance = $distance;
        $this->temps = $temps;
    }
    // acceseurs marque
    public function getMarque(): int
    {
        return $this->marque;
    }
    public function setMarque($marque): self
    {
        $this->marque = $marque;
        return $this;
    }
    // acceseurs couleur
    public function getCouleur(): int
    {
        return $this->couleur;
    }
    public function setCouleur($couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }
    // acceseurs distance
    public function getDistance(): int
    {
        return $this->distance;
    }
    public function setDistance($distance): self
    {
        $this->distance = $distance;
        return $this;
    }
    // acceseurs temps
    public function getTemps(): int
    {
        return $this->temps;
    }
    public function setTemps($temps): self
    {
        $this->temps = $temps;
        return $this;
    }

    //methodes

    private function calculVitesse()
    {
        $vitesse = $this->distance / $this->temps;
        return $vitesse;
    }


    public function afficheVitesse()
    {
        $vitesse = $this->calculVitesse();

        echo "vitesse de la voiture" . "   $this->marque de la couleur $this->couleur est de $vitesse km/h";
    }

    public function afficheDistance()
    {
        echo "Distance parcourue par la voiture $this->distance km";
    }
}
