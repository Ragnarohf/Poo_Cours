<?php
class CompteEpargne extends Compte
{
    private  $taux_interet;
    const BANQUE = "BNP";
    public function __construct($titulaire, $solde, $taux_interet)
    {
        parent::__construct($titulaire, $solde);
        $this->taux_interet = $taux_interet;
    }

    // acceseurs taux


    public function getTaux_interet(): float
    {
        return $this->taux_interet;
    }
    public function setTaux_interet($taux_interet): self
    {
        $this->taux_interet = $taux_interet;
        return $this;
    }
    public function soldeTotal()
    {
        $this->solde = $this->solde + ($this->solde * $this->taux_interet / 100);
        echo $this->afficheSolde();
        //echo "votre nouveau solde $this->titulaire dans le compte epargne est de $this->solde";
    }
}
