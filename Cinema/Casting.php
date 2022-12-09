<?php
class Casting{
    private string $_film;
    private string $_role;
    private string $_acteur:

    public function __construct(string $film, string $role, string $acteur){
        $this->_film = $film;
        $this->_role = $role;
        $this->_acteur = $acteur;
    }

    public function getFilm(): string{
        return $this->_film;
    }

    public function getRole(): string{
        return $this->_role;
    }

    public function getActeur(): string{
        return $this->_acteur;
    }
}
?>