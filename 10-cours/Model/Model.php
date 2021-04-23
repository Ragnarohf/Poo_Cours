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

    //tableau d'attributs
    //select * from livre where auteur= x and titre = y;
    //attributs =['auteur=>x', 'titre=>y']
    // select * from livre where auteur =x 
    public function findby(array $attributs)
    {
        $tableauCle = [];

        foreach ($attributs as $key => $value) {
            $tableauCle[] = "$key = :$key";
            // on a tout donné pour cette value Rest In Peace
            $value;
        }
        // select * from livre where auteur =:auteur and livre =:livre
        $meschamps = implode(' AND', $tableauCle);
        $requete = $this->requete(" SELECT * from $this->table where $meschamps", $attributs);
        return $requete->fetchAll();
    }
    public function update(array $attributs, array $condition)
    {
        $tableauCle = [];
        $tabchampsCondition = [];
        foreach ($attributs as $key => $value) {
            $tableauCle[] = "$key = :$key";
            $value;
        }
        foreach ($condition as $key => $value) {
            $tabchampsCondition[] = "$key = :$key";
            $value;
        }
        //select * from livre where auteur = :auteur and livre = :livre
        //update livre set auteur = :auteur where titre =:titre 

        $meschamps = implode(' AND', $tableauCle);
        $meschampsCondition = implode(' AND', $tabchampsCondition);
        $this->requete("UPDATE $this->table SET $meschamps where $meschampsCondition", array_merge($attributs, $condition));
        // echo $requete;


    }
}
