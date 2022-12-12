<?php 
class film{
    private string $_titre;
    private string $_date;
    private Genre $_genre;
    private Realisateur $_realisateur;
    private int $_dure;

    public function __construct($titre,$date,$genre,$realisateur,$dure){
        $this->_titre = $titre;
        $this->_date = $date;
        $this->_genre = $genre;
}



?>