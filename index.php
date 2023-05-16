<?php

require_once __DIR__ . "/Models/Movie.php";
$first_movie_genres = ["Fantascienza", "Avventura", "Drammatico"];
$second_movie_genres = ["Sentimentale", "Storico", "Drammatico", "Catastrofico"];
$third_movie_genres = ["Commedia", "Drammatico"];

$first_movie = new Movie("Interstellar", $first_movie_genres);
$second_movie = new Movie("Forrest Gump", $second_movie_genres);
$third_movie = new Movie("Titanic", $third_movie_genres);

$first_movie->setData("2014", "Christopher Nolan");
$second_movie->setData("1994", "Robert Zemeckis");
$third_movie->setData("1997", "James Cameron");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <h1>Film</h1>
    <!-- Primo film -->
    <div class="title">
        <h3>Titolo del film: <?php echo $first_movie->title ?></h3>
    </div>
    <div class="genres">
        <h4>Generi</h4>
        <ul>
            <?php foreach ($first_movie->genres as $key => $genre) { ?>
                <li><?php echo $genre ?></li>
            <?php } ?>
        </ul>
    </div>
    <div class="year">Anno: <?php echo $first_movie->year ?></div>
    <div class="director">Regista: <?php echo $first_movie->director ?></div>
    <!-- Secondo film -->
    <div class="title">
        <h3>Titolo del film: <?php echo $second_movie->title ?></h3>
    </div>
    <div class="genres">
        <h4>Generi</h4>
        <ul>
            <?php foreach ($second_movie->genres as $key => $genre) { ?>
                <li><?php echo $genre ?></li>
            <?php } ?>
        </ul>
    </div>
    <div class="year">Anno: <?php echo $second_movie->year ?></div>
    <div class="director">Regista: <?php echo $second_movie->director ?></div>
    <!-- Terzo film -->
    <div class="title">
        <h3>Titolo del film: <?php echo $third_movie->title ?></h3>
    </div>
    <div class="genres">
        <h4>Generi</h4>
        <ul>
            <?php foreach ($third_movie->genres as $key => $genre) { ?>
                <li><?php echo $genre ?></li>
            <?php } ?>
        </ul>
    </div>
    <div class="year">Anno: <?php echo $third_movie->year ?></div>
    <div class="director">Regista: <?php echo $third_movie->director ?></div>
</body>

</html>