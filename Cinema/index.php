<?php


spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

$real1 = new Realisateur("Raihani","Rayan","Male","27-01-2004");
$acteur1 =new Acteur("Maguire","Tobey","Male","27/06/1975");
$action = new Genre("Action");
$role1 = new Role("Spider-Man");
$film1 = new Film("Spider-Man","2002",$action,$real1);
$casting1 = new Casting($film1,$role1,$acteur1);






// echo $film1->getInfoFilm(). "<br>";
echo $casting1->getCasting();
echo $real1->dispRealisateur();
echo $action->dispGenre();






?>