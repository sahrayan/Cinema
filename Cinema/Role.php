<?php
class Role{
    public  $_nom;
    private array $_casting;

    public function __construct($nom){
        $this->_nom = $nom;
        $this->_casting = [];
    }
// rajout de casting dans casting
    public function addCasting($nouveauCasting){
        $this->_casting[] = $nouveauCasting;
    }

    public function getNom()
    {
        return $this->_nom;
    }
    
//     list des Acteur
    public function getListeActeur(){
        foreach($this->_casting as $casting){
            return $casting->getActeur();
        }

    }
    
    public function __toString()
    {
        return $this->_nom;
    }
    





}
?>
