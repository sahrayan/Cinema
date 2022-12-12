<?php 
class Realisateur extends Personnage{
    private array $_films;

    public function __construct(string $nom, string $prenom, string $sex, string $anniversiare){
        $this->_films =[];
    }
    public function addFilm($film)
    {
        $this->_films[] = $film;
    }
}



?>