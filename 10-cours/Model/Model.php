<?php

namespace App\Model;

use App\DB\DB;

class Model extends DB
{
    protected $table;
    private $db;

    public function requete(string $sql, array $attributs = Null)
    {
        //recupere l'instance db
        $this->db = DB::getInstance();
        if ($attributs !== null) {
            //requete prepared
            $requete = $this->db->prepare($sql);
            $requete->execute($attributs);
        } else {
            $requete = $this->db->query($sql);
        }
        return $requete;
    }
    public function findAll()
    {
        $requete = $this->requete("SELECT * FROM $this->table");
        $livres = $requete->fetchAll();
        return $livres;
    }
}
