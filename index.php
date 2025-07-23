<?php

require_once './Models/Film.php';
require_once './Models/Genre.php';





trait Rateable {
    public $rating = 0;

    public function setRating($rating) {
        $this->rating = $rating;
    }
}



$scifi = new Genre('scifi');
$cartoon = new Genre('cartoon');

$interstellar = new Film('Interstellar',  2014, true, [$scifi, $cartoon]);
$mulan = new Film('Mulan', 1998, false, [$cartoon]);

// Utilizzo del trait Rateable
$interstellar->setRating(5);
$mulan->setRating(4);

echo "<h2>Film con valutazioni:</h2>";
foreach ([$interstellar, $mulan] as $film) {
    echo "<h3>{$film->title}</h3>";
    echo "Rating: {$film->rating}/5<br><br>";
}

// var_dump($interstellar);
// var_dump($mulan);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILMZZZZ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #007acc;
        }
        h3 {
            color: #007acc;
        }
    </style>
</head>
<body>
    
</body>
</html>