<?php

class AbonneSport extends Abonne
{
    protected $type;
    public function __construct($nom, $prenom, $type)
    {
        parent::__construct($nom, $prenom);
        $this->type = $type;
    }
}
