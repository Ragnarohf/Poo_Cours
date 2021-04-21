<?php
class Employe
{
    public $nom;
    public $prenom;
    public $sexe;
    public $age;
    public $salaire;

    public function afficheInfo()
    {
        echo " je suis $this->nom, $this->prenom";
    }
    public function calculPrime()

    {
        if ($this->salaire < 2000) {
            $prime = 400;
            return $prime;
        } else if ($this->salaire > 2000 && $this->salaire < 5000) {
            $prime = 300;
            return $prime;
        }
    }

    public function afficheSalaire()
    {
        $prime = $this->calculPrime();
        $this->salaire += $prime;
        echo "mon salaire est de $this->salaire";
    }
}
//creer une classe employe qui a comme propriété
// nom, prenom, sexe, age , salaire
// methodes ;
// afficheinfo-> affiche el nom et le prenom
// calcule la prime a partir du salaire ( si le salaire <2000)
// une prime de 400 euros) sinon le salaire est entre 2000 et 5000
// une prime de de 300 euros => calcuPrime
//AfficheSalaire -> affiche le salaide de chaqsue personne
// aprés l'ajout de la prime