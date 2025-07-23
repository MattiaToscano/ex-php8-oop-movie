<?php

class Film{

    public $title;
    public $genre;
    public $year;

    function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year =$year;

    }
}

$interstellar = new Film('Interstellar', 'sci-fi', 2014);
$mulan = new Film('Mulan', 'cartoon', 1998);

var_dump($interstellar)



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