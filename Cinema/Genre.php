<?php
class Genre{
    private string $_genre;

    public function __construct($genre){
        $this->_genre = $genre;

    
    public function getGenre()
    {
        return $this->_genre;
    }

    
    public function seGenre($_genre)
    {
        $this->_genre = $genre;

        return $this;
    }
}












?>