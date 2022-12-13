<?php
class Role{
    public  $_nom;
    private  $_films;
    private array $_casting;

    public function __construct($nom,$films){
        $this->_nom = $nom;
        $this->_films = $films;
        $this->_casting = [];
    }

    public function addCasting($nouveauCasting){
        $this->_casting[] = $nouveauCasting;
    }

    public function getNom()
    {
        return $this->_nom;
    }
    
    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function getFilms()
    {
        return $this->_films;
    }

    public function setFilms($films)
    {
        $this->_films = $films;
    }
}
?>