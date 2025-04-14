<?php

require_once "./Models/Genre.php";

class Movie {
    public $title;
    public $director;
    public $year;
    public $genre;

    function __construct($_title, $_director, $_year, $_genre) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    public function isRecent() {
        if ($this->year <= 2025 - 15) {
            return "Il film non è recente";
        } else {
            return "il film è recente";
        }
    }
}

    $ilSignoreDegliAnelli = new Movie("Il signore degli anelli", "Peter Jackson", 2001, $fantasy);
    $avengers = new Movie("Avengers", "Josh Whedon", 2012, $azione);

?>