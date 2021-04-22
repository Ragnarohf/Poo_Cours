<?php

/**
 * la classe compte
 */
class Compte
{
    private $titulaire;
    private $solde;
    public function __construct(string $titulaire, int $solde)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }

    // acceseurs titulaire
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }
    public function setTitulaire($titulaire): self
    {
        $this->titulaire = $titulaire;
        return $this;
    }
    // acceseurs solde


    public function getSolde(): float
    {
        return $this->solde;
    }
    public function setSolde($solde): self
    {
        $this->solde = $solde;
        return $this;
    }

    public function afficheSolde()
    {
        echo "<br> le de votre compte est de  $this->solde <br>";
    }

    public function deposerArgent(float $montant)
    {
        if ($montant > 0) {
            $this->solde += $montant;
        }
        return $this->solde;
    }



    public function retirerArgent(float $montant)
    {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
            $this->afficheSolde();
        } else {
            echo "solde insuffisant: erreur de retrait";
        }
    }
}
