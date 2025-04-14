<?php 

class Genre {
    public $type;
    public $description;

    function __construct($_type, $_description) {
        $this->type = $_type;
        $this->description = $_description;
    }
}

$azione = new Genre("Azione", "Film con scene dinamiche e adrenaliniche");
$commedia = new Genre("Commedia", "Film divertenti, con situazioni comiche");
$horror = new Genre("Horror", "Film pensati per spaventare lo spettatore");
$drammatico = new Genre("Drammatico", "Film con tematiche serie e coinvolgenti");
$fantasy = new Genre("Fantasy", "Film ambientati in mondi immaginari con elementi magici");

?>