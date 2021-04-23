<?php

namespace App\banque;

class CompteCourrant extends Compte
{
    private  $decouvert;
    public function __construct(string $titulaire, float $solde, int $decouvert)
    {
        parent::__construct($titulaire, $solde);
        $this->decouvert = $decouvert;
    }

    // acceseurs decouvert


    public function getDecouvert(): int
    {
        return $this->decouvert;
    }
    public function setDecouvert($decouvert): self
    {
        $this->decouvert = $decouvert;
        return $this;
    }
    //retirer argnet !== retirer argent de la classe mere => polymorphisme
    public function retirerArgent(float $montant)
    {
        if ($montant > 0 && (($this->getSolde() - $montant) >= -$this->decouvert)) {
            $this->setSolde($this->getSolde() - $montant);
            $this->afficheSolde();
        } else {
            echo "solde insuffisant: erreur de retrait";
        }
    }
}
