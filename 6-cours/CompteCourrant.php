<?php

class CompteCourrant extends Compte
{
    private  $decouvert;
    // public function __construct($titulaire, $solde, $decouvert)
    // {
    //     parent::__construct($titulaire, $solde);
    //     $this->decouvert = $decouvert;
    // }

    // acceseurs decouvert


    public function getDecouvert(): float
    {
        return $this->decouvert;
    }
    public function setDecouvert($decouvert): self
    {
        $this->decouvert = $decouvert;
        return $this;
    }
}
