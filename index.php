<?php

require_once __DIR__ . "/Models/Movie.php";

$first_movie = new Movie("Interstellar", "Fantascienza");
$second_movie = new Movie("Forrest Gump", "Comedy-drama");
$third_movie = new Movie("Titanic", "Romance");

var_dump($first_movie);
var_dump($second_movie);
var_dump($third_movie);

$first_movie->setData("2014", "Christopher Nolan");
$second_movie->setData("1994", "Robert Zemeckis");
$third_movie->setData("1997", "James Cameron");

echo ($first_movie->printData());
echo ("<br>");
echo ($second_movie->printData());
echo ("<br>");
echo ($third_movie->printData());
echo ("<br>");
