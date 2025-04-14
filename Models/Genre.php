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
$thriller = new Genre("Thriller", "Film con tensione e suspense, spesso con colpi di scena");
$romantico = new Genre("Romantico", "Film incentrati su storie d'amore e relazioni sentimentali");
$documentario = new Genre("Documentario", "Film che esplorano temi reali con un approccio informativo");
$fantascienza = new Genre("Fantascienza", "Film basati su scenari futuristici, tecnologia e universi alternativi");
$storico = new Genre("Storico", "Film ambientati in epoche passate con eventi o personaggi reali");
$animazione = new Genre("Animazione", "Film realizzati con tecniche animate, spesso per un pubblico giovane");
$musical = new Genre("Musical", "Film con numerose scene cantate e coreografie");
$giallo = new Genre("Giallo", "Film basati su misteri, indagini e crimini da risolvere");
$avventura = new Genre("Avventura", "Film ricchi di azione, viaggi e missioni emozionanti");
$biografico = new Genre("Biografico", "Film che raccontano la vita di personaggi realmente esistiti");

?>