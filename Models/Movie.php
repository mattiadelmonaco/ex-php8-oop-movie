<?php

class Movie {
    public $title;
    public $director;
    public $year;

    function __construct($_title, $_director, $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    public function isRecent() {
        if ($this->year <= 2025 - 15) {
            return "Il film non è recente";
        } else {
            return "il film è recente";
        }
    }
}

?>