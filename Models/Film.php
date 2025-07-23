<?php
class Film{
    use Rateable;

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

?>