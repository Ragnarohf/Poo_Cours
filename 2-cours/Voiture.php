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
    public function setMarque(): int
    {
        return $this->marque;
    }
    public function getMarque($marque): self
    {
        $this->marque = $marque;
        return $this;
    }
    // acceseurs couleur
    public function setCouleur(): int
    {
        return $this->couleur;
    }
    public function couleur($couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }
    // acceseurs distance
    public function setDistance(): int
    {
        return $this->distance;
    }
    public function getDistance($distance): self
    {
        $this->distance = $distance;
        return $this;
    }
    // acceseurs temps
    public function setTemps(): int
    {
        return $this->temps;
    }
    public function getTemps($temps): self
    {
        $this->temps = $temps;
        return $this;
    }

    public function calculVitesse()
    {
        return $vitesse = ($this->temps) * ($this->distance);
    }
    public function afficheVitesse()
    {
        $vitesse = $this->calculVitesse();
        echo $vitesse;
    }
}
