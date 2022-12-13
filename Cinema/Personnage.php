<?php
class Personnage{
    private string $_nom;
    private string $_prenom;
    private string $_sex;
    private string $_anniversaire;

    public  function __construct(string $nom, string $prenom, string $sex,string $anniversaire){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sex = $sex;
        $this->_anniversaire = $anniversaire;
    }

    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getSex(){
        return $this->_sex;
    }
    public function getAnniversaire(){
        return $this->_anniversaire;
    }

}
?>