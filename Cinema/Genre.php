<?php
class Genre{
    private string $_genre;
    private array $_films;

    public function __construct($genre){
        $this->_genre = $genre;
        $this->_films = [];
            

    }
    public function getGenre():string
    {
        return $this->_genre;
    }

    
    public function setGenre($genre)
    {
        $this->_genre = $genre;

        return $this;
    }
    public function addFilm($film)
    {
        $this->_films[] = $film;
    }
    public function dispGenre(){
        $result = "film de genre $this";
        foreach ($this->_films as $film){
            $result.= $film;
        }
     return $result;
    }
    public function __toString()
    {
        return $this->getGenre();
    }











}
?>