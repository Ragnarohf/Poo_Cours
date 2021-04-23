<?php

namespace App\client;

use App\banque\CompteEpargne;

/**
 * Compte client
 */
class Compte
{
    public $nom;
    public $prenom;
    public $age;
    public $CompteEpargne;
    public function __construct(string $nom, string $prenom, int $age, CompteEpargne $compteE)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->noagem = $age;
        $this->compteEpargne = $compteE;
    }
}
