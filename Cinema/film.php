<?php 
class Film{
    private string $_titre;
    private string $_date;
    private Genre $_genre;
    private Realisateur $_realisateur;
    

    public function __construct($titre,$date,$genre,$realisateur){
        $this->_titre = $titre;
        $this->_date = $date;
        $this->_genre = $genre;
        $this->_realisateur = $realisateur;
        $this->_realisateur->addFilm($this);
        $this->_genre->addFilm($this);
        $this->_casting = [];

    }
    public function getInfoCastings(){
        foreach($this->_casting as $film);
    }
    public function addCasting($NewCasting){
        $this->_casting[] = $NewCasting;
    }    

    public function getTitre(){
        return $this->_titre;
    }
    public function getDate(){
        return $this->_date;
    }
    public function getGenre(){
        return $this->_genre;
    }
    public function getRealisateur(){
        return $this->_realisateur;
    }

    public function getInfoFilm(){
        return $this->getTitre(). " (".$this->getDate(). ") / ".$this ->getGenre(). " / réalisé par ". $this->getRealisateur();
    }



    public function __toString()
    {
        return $this->getTitre(). " (".$this->getDate(). ") ";
    }
}


?>