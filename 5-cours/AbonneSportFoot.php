<?php
class AbonneSportFoot extends AbonneSport
{
    private $maillot;
    //constructeur
    public function __construct($nom, $prenom, $type, $maillot)
    {
        parent::__construct($nom, $prenom, $type);
        $this->maillot = $maillot;
    }

    public function monSport()
    {
        echo 'mon sport est du foot';
    }
}
