<?php
class Acteur extends Personnage {
    private array $_casting;
        
    public function __construct(string $nom,string $prenom,string $sex,$anniversaire){
        parent::__construct($nom,$prenom,$sex,$anniversaire);
        $this->_casting = [];
    }
            

    public function addCasting($nouveauCasting){
        $this->_casting[] = $nouveauCasting;
    }


    public function getInfoActeur(){
        $this->getNom()." ".$this -> getPrenom(). " ".$this -> getSex(). " ".$this -> getAnniversaire();
    }
 
    public function __toString()
    {
        return $this->getNom()." ".$this -> getPrenom(). " ".$this -> getSex(). " ".$this -> getAnniversaire();
    }

    public function listCasting(){
        echo "<br> L'acteur " .$this->getPrenom()." ".$this->getNom(). " a participer au films:<br>";
        foreach($this->_casting as $nouveauCasting){
            echo $nouveauCasting->getFilm()->getTitre()." dans lequel il incarne " .$nouveauCasting->getRole()->getNom()."<br>";
        }
    }
 }
?>