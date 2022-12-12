<?php
class Role{
    public  $_nom;
    private  $_films;

    public function __construct($nom,$films){
        $this->_nom = $nom;
        $this->_films = $films;
    }
    public function getNom()
    {
        return $this->_nom;
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