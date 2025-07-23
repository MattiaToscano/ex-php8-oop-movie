<?php

class Film{

    public $title;
    public $year;
    public $adultFilm;
    public $genre;


    //costruttore
    function __construct($_title, $_year, $_adultFilm, array $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->adultFilm = $_adultFilm;
        $this->genre = $_genre;
    }
    public function filmForAdult()
    {
        return $this->adultFilm == true;
    }
}



class Genre
{

    public $genre;

    function __construct($_genre)
    {
        $this->genre=$_genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}

$scifi = new Genre('scifi');
$cartoon = new Genre('cartoon');

$interstellar = new Film('Interstellar',  2014, true, [$scifi, $cartoon]);
$mulan = new Film('Mulan', 1998, false, [$cartoon]);

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