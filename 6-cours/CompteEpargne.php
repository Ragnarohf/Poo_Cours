<?php
class CompteEpargne extends Compte
{
    private  $taux;
    public function __construct($titulaire, $solde, $taux)
    {
        parent::__construct($titulaire, $solde);
        $this->taux = $taux;
    }

    // acceseurs taux


    public function getTaux(): float
    {
        return $this->taux;
    }
    public function setTaux($taux): self
    {
        $this->taux = $taux;
        return $this;
    }
}
