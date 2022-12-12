<?php
class Role{
    public  $_nom;
    private  $_films;

    public function __construct($nom,$films){
        $this->_nom = $nom;
        $this->_films = $films;
    }
}
?>