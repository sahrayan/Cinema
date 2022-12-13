<?php
class Casting{
    private Film $_film;
    private Role $_role;
    private Personnage $_personnage;

    public function __construct($film, $role, $personnage){
        $this->_film = $film;
        $this->_film->addCasting($this);
        $this->_role = $role;
        $this->_personnage = $personnage;
    }

    public function getFilm(): string{
        return $this->_film;
    }

    public function getRole(){
        return $this->_role;
    }

    public function getPersonnage(){
        return $this->_personnage;
    }
    
}
?>