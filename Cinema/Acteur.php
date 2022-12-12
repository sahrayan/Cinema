<?php
class Acteur extends Personnage {
    private $_casting =[];
        
    public function __construct(string $nom,string $prenom,string $sex,$anniversaire){
        parent::__construct($nom,$prenom,$sex,$anniversaire);
    }
            

    public function addCasting($nouveauCasting){
        array_push($this->_casting,$nouveauCasting);
    }


    public function listCasting(){
        echo "L'acteur " .$this->getNom()." ".$this->getPrenom(). "a participer au films:<br>";
        foreach($this->_casting as $casting){
            echo $casting->getFilm()->getTitle()." dans lequel il incarne " .$casting->getRole()->getName()."<br>";
        }
    }
}
?>