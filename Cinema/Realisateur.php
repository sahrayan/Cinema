<?php 
class Realisateur extends Personnage{
    private array $_films;

    public function __construct(string $nom, string $prenom, string $sex, string $anniversiare){
        parent::__construct($nom,$prenom,$sex,$anniversiare);
        $this->_films =[];
    }
//   nouvrau tableau film ou on rajout un film dedans
    public function addFilm($film)
    {
        $this->_films[] = $film;
    }
    public function __toString()
    {
        return $this->getNom()." ".$this -> getPrenom(). " ".$this -> getSex(). " ".$this -> getAnniversaire();
    }
    
    public function dispRealisateur(){
    $result = "Film realiser par $this  : ";
        foreach ($this->_films as $film){
            $result.= $film;
        }
        return $result;
    }

    
}



?>
