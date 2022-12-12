<?php


require_once 'Acteur.php';

require_once 'Genre.php';

require_once 'film.php';

require_once 'Realisateur.php';

require_once 'Personnage.php';

require_once 'role.php';

require_once 'Casting.php';


$real1 = new Realisateur("Raihani","Rayan","Male","27-01-2004");
$action = new Genre("Action");
$film1 = new Film("Spider-Man","2002",$action,$real1);

echo $film1;







?>