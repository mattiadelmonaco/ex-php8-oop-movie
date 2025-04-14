<?php

require_once "./Traits/Duration.php"; //importare prima i traits

require_once "./Models/Genre.php";

class Movie {

    use Duration; // associo il trait Duration alla classe Movie

    public $title;
    public $director;
    public $year;
    public $genres = [];

    function __construct($_title, $_director, $_year, $_genres, $_duration) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genres = $_genres;
        $this->duration = $_duration;
    }

    public function isRecent() {
        if ($this->year <= 2025 - 15) {
            return "Il film non è recente";
        } else {
            return "il film è recente";
        }
    }

    public function getGenresAsString() {
        $genreNames = array_map(function($genre) { // questa funzione prende l'array genres del film e ne estrare solo il nome(type)
            return $genre->type;
        }, $this->genres);

        return implode(", ", $genreNames); // implode è una funzione di php che unisce gli elementi di un array e li trasforma in stringa, 
        // separandoli con quello che viene passato come primo argomento e inserendo l'array nel secondo

    }

    public function getDescription() {
        return "$this->title ($this->year), diretto da {$this->director}, generi: " . $this->getGenresAsString();
    }
}

    

?>