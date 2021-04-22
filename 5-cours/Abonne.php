
<?php
 abstract class Abonne
{
    //caracteristiques => propiriétés
    public $nom;
    public $prenom;
    private $age;

    //le constructeur
    //new PDO(mysqblblbla)

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
