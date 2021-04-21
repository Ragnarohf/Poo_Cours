
<?php
class Abonne
{
    public $nom;
    public $prenom;
    public $age;
    public function createAbonne($nomEntreprise)
    {
        echo "je suis l'abonne $this->nom, $this->prenom de  $nomEntreprise";
    }
}
