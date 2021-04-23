
<?php
class Abonne
{

    public $nom;
    public $prenom;
    private $age;

    //le constructeur
    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
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
