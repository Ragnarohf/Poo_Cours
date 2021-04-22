
<?php
abstract class Abonne
{
    //caracteristiques => propiriétés
    public $nom;
    public $prenom;
    private $age;

    //le constructeur
    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }




    // acceseurs get et set
    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge($age): self
    {
        $this->age = $age;
        return $this;
    }

    //methodes
    public function createAbonne($nomEntreprise)
    {
        echo "je suis l'abonne $this->nom, $this->prenom de  $nomEntreprise";
    }
}
