<?php


spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

$real1 = new Realisateur("Raihani","Rayan","Male","27-01-2004");
$action = new Genre("Action");
$film1 = new Film("Spider-Man","2002",$action,$real1);

echo $film1;







?>