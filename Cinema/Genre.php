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
    public function __toString()
    {
        return $this->getGenre();
    }
    
    public function dispGenre(){
        $result = "<br> Le film et du genre $this : ";
        foreach ($this->_films as $film){
            $result.= $film;
        }
     return $result;
    }
    









}
?>