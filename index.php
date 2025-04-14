<?php 

require_once "./Models/Movie.php";

// per creare istanze di Movie
$ilSignoreDegliAnelli = new Movie("Il signore degli anelli", "Peter Jackson", 2001, [$fantasy, $azione, $drammatico], 180);
$avengers = new Movie("Avengers", "Josh Whedon", 2012, [$azione], 10);

var_dump($ilSignoreDegliAnelli);
var_dump($avengers);

// metodo per vedere se il film è recente oppure no (in classe Movie)
echo $ilSignoreDegliAnelli->title . ":" . $ilSignoreDegliAnelli->isRecent() . "<br>";
echo $avengers->title . ":" . $avengers->isRecent() . "<br>";

echo "<hr>";

// metodo per avere una descrizione del film (in classe Movie)
echo $ilSignoreDegliAnelli->getDescription();
echo "<br>";
echo $avengers->getDescription();
echo "<br>";

echo "<hr>";

// metodo per vedere se il film è lungo o corto (dal trait Duration)
echo $ilSignoreDegliAnelli->title . ": " . $ilSignoreDegliAnelli->isLongMovie() . " ($ilSignoreDegliAnelli->duration " . "minuti)";
echo "<br>";
echo $avengers->title . ": " . $avengers->isLongMovie() . " ($avengers->duration " . "minuti)";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- /BOOTSTRAP -->
</head>
<body class="bg-dark text-white">
    
</body>
</html>