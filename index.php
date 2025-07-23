<?php

class Film{

    public $title;
    public $genre;
    public $year;
    public $adultFilm;

    function __construct($_title, $_genre, $_year, $_adultFilm)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->adultFilm = $_adultFilm;
    }
    public function filmForAdult()
    {
        return $this->adultFilm == true;
    }
}

$interstellar = new Film('Interstellar', 'sci-fi', 2014, true);
$mulan = new Film('Mulan', 'cartoon', 1998, false);

var_dump($interstellar);
var_dump($mulan);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILMZZZZ</title>
</head>
<body>
    
</body>
</html>