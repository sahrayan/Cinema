<?php
class Casting{
    private Film $_film;
    private Role $_role;
    private Acteur $_acteur;

    public function __construct($film, $role, $acteur){
        $this->_film = $film;
        $this->_film->addCasting($this);
        $this->_role = $role;
        $this->_role->addCasting($this);
        $this->_acteur = $acteur;
        $this->_acteur->addCasting($this);
    }

    public function getFilm(): string{
        return $this->_film;
    }

    public function getRole(){
        return $this->_role;
    }

    public function getActeur(){
        return $this->_acteur;
    }

}
?>