<?php


spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});


$action = new Genre("Action");
$aventure = new Genre("Aventure");
$policier = new Genre("Policier");
$fiction = new Genre("Fiction Jeunesses");

// Film Spider-man $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
$real1 = new Realisateur("Raihani","Rayan","Male","27-01-2004");
$acteur1 =new Acteur("Maguire","Tobey","Male","27/06/1975");
$acteur2 =new Acteur("Garfield","Andrew","Male","20/08/1983");
$role1 = new Role("Spider-Man");
$film1 = new Film("Spider-Man","2002",$action,$real1);
$casting1 = new Casting($film1,$role1,$acteur1);
$casting1 = new Casting($film1,$role1,$acteur2);

$real2 = new Realisateur("Raimi","Sam","Male","23/10/1959");
$acteur3 = new Acteur("Franco","James","Male","20/08/1983");
$role2 = new Role("Green");
$film2 = new Film("Green","2002",$action,$real2);
$casting2 = new Casting($film2,$role2,$acteur3);





// echo $film1->getInfoFilm(). "<br>";
// echo $casting1->getCasting();
// echo $real1->dispRealisateur();
// echo $action->dispGenre();

// echo $film2->getInfoFilm(). "<br>";
// echo $casting2->getCasting();
// echo $real2->dispRealisateur();
// echo $action2->dispGenre()."<br>";

// echo $acteur1->listCasting();
echo $action->dispGenre();


?>