<?php
class Genre{
    private string $_genre;
    private array $_films;

    public function __construct($genre){
        $this->_genre = $genre;
        $this->_films = [];
            

    }
//     Methode
    public function getGenre():string
    {
        return $this->_genre;
    }
//  RAJOUT D UN FILM DANS FILM
    public function addFilm($film)
    {
        $this->_films[] = $film;
    }
    public function __toString()
    {
        return $this->getGenre();
    }
//     Genre d un filme action,science etc
    public function dispGenre(){
        $result = "<br> Le film et du genre $this : ";
        foreach ($this->_films as $film){
            $result.= $film;
        }
     return $result;
    }
    









}
?>
