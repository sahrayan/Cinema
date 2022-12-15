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

$real2 = new Realisateur("Raimi","Sam","Male","23/10/1959");
$acteur2 = new Acteur("Franco","James","Male","20/08/1983");
$action2 = new Genre("Action");
$role2 = new Role("Green");
$film2 = new Film("Green","2002",$action2,$real2);
$casting2 = new Casting($film2,$role2,$acteur2);




echo $film2->getInfoFilm(). "<br>";
echo $casting2->getCasting();
echo $real2->dispRealisateur();
echo $action2->dispGenre();






?>