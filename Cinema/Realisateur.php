<?php 
class Realisateur extends Personnage{
    private array $_films;

    public function __construct(string $nom, string $prenom, string $sex, string $anniversiare){
        parent::__construct($nom,$prenom,$sex,$anniversiare);
        $this->_films =[];
    }
    public function addFilm($film)
    {
        $this->_films[] = $film;
    }
    public function dispRealisateur(){
        $result = "film de $this";
        foreach ($this->_films as $film){
            $result.= $film;
        }
     return $result;
    }



}



?>