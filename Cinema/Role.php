<?php
class Role{
    public function $_nom;
    private function $_films;

    public function __construct($nom,$films){
        $this->_nom = $nom;
        $this->_films = $films;
    }
}
?>