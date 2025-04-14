<?php 

require_once "./Models/Movie.php";

// per creare istanze di Movie
$ilSignoreDegliAnelli = new Movie("Il signore degli anelli", "Peter Jackson", 2001, [$fantasy, $azione, $drammatico], 180);
$avengers = new Movie("Avengers", "Josh Whedon", 2012, [$azione], 10);
$bohemianRhapsody = new Movie("Bohemian Rhapsody", "Bryan Singer", 2018, [$biografico, $musical], 134);
$matrix = new Movie("Matrix", "Lana e Lilly Wachowski", 1999, [$fantascienza, $azione, $thriller], 136);
$titanic = new Movie("Titanic", "James Cameron", 1997, [$storico, $romantico, $drammatico], 195);
$coco = new Movie("Coco", "Lee Unkrich", 2017, [$animazione, $musical, $fantasy], 105);



// var_dump($ilSignoreDegliAnelli);
// var_dump($avengers);

// metodo per vedere se il film è recente oppure no (in classe Movie)
// echo $ilSignoreDegliAnelli->title . ":" . $ilSignoreDegliAnelli->isRecent() . "<br>";
// echo $avengers->title . ":" . $avengers->isRecent() . "<br>";

// echo "<hr>";

// metodo per avere una descrizione del film (in classe Movie)
// echo $ilSignoreDegliAnelli->getDescription();
// echo "<br>";
// echo $avengers->getDescription();
// echo "<br>";

// echo "<hr>";

// metodo per vedere se il film è lungo o corto (dal trait Duration)
// echo $ilSignoreDegliAnelli->title . ": " . $ilSignoreDegliAnelli->isLongMovie() . " ($ilSignoreDegliAnelli->duration " . "minuti)";
// echo "<br>";
// echo $avengers->title . ": " . $avengers->isLongMovie() . " ($avengers->duration " . "minuti)";

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
<div class="container py-5">
        <h1 class="text-center mb-5">I Nostri Film</h1>
        
        <div class="row g-4">
            <!-- Card Signore degli Anelli -->
            <div class="col-md-6">
                <div class="card h-100 bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $ilSignoreDegliAnelli->title ?></h5>
                        <div class="card-text">
                            <ul class="list-unstyled">
                                <li><strong>Descrizione:</strong> <?php echo $ilSignoreDegliAnelli->getDescription() ?></li>
                                <li><strong>Anno:</strong> <?php echo $ilSignoreDegliAnelli->year ?></li>
                                <li><strong>Regista:</strong> <?php echo $ilSignoreDegliAnelli->director ?></li>
                                <li><strong>Durata:</strong> <?php echo $ilSignoreDegliAnelli->duration ?> minuti</li>
                                <li><strong>Film lungo?</strong> <?php echo $ilSignoreDegliAnelli->isLongMovie() ?></li>
                                <li><strong>Film recente?</strong> <?php echo $ilSignoreDegliAnelli->isRecent() ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Avengers -->
            <div class="col-md-6">
                <div class="card h-100 bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $avengers->title ?></h5>
                        <div class="card-text">
                            <ul class="list-unstyled">
                                <li><strong>Descrizione:</strong> <?php echo $avengers->getDescription() ?></li>
                                <li><strong>Anno:</strong> <?php echo $avengers->year ?></li>
                                <li><strong>Regista:</strong> <?php echo $avengers->director ?></li>
                                <li><strong>Durata:</strong> <?php echo $avengers->duration ?> minuti</li>
                                <li><strong>Film lungo?</strong> <?php echo $avengers->isLongMovie() ?></li>
                                <li><strong>Film recente?</strong> <?php echo $avengers->isRecent() ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Bohemian Rhapsody -->
            <div class="col-md-6">
                        <div class="card h-100 bg-secondary text-white">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $bohemianRhapsody->title ?></h5>
                                <div class="card-text">
                                    <ul class="list-unstyled">
                                        <li><strong>Descrizione:</strong> <?php echo $bohemianRhapsody->getDescription() ?></li>
                                        <li><strong>Anno:</strong> <?php echo $bohemianRhapsody->year ?></li>
                                        <li><strong>Regista:</strong> <?php echo $bohemianRhapsody->director ?></li>
                                        <li><strong>Durata:</strong> <?php echo $bohemianRhapsody->duration ?> minuti</li>
                                        <li><strong>Film lungo?</strong> <?php echo $bohemianRhapsody->isLongMovie() ?></li>
                                        <li><strong>Film recente?</strong> <?php echo $bohemianRhapsody->isRecent() ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

            <!-- Card Matrix -->
            <div class="col-md-6">
                <div class="card h-100 bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $matrix->title ?></h5>
                        <div class="card-text">
                            <ul class="list-unstyled">
                                <li><strong>Descrizione:</strong> <?php echo $matrix->getDescription() ?></li>
                                <li><strong>Anno:</strong> <?php echo $matrix->year ?></li>
                                <li><strong>Regista:</strong> <?php echo $matrix->director ?></li>
                                <li><strong>Durata:</strong> <?php echo $matrix->duration ?> minuti</li>
                                <li><strong>Film lungo?</strong> <?php echo $matrix->isLongMovie() ?></li>
                                <li><strong>Film recente?</strong> <?php echo $matrix->isRecent() ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Titanic -->
            <div class="col-md-6">
                <div class="card h-100 bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $titanic->title ?></h5>
                        <div class="card-text">
                            <ul class="list-unstyled">
                                <li><strong>Descrizione:</strong> <?php echo $titanic->getDescription() ?></li>
                                <li><strong>Anno:</strong> <?php echo $titanic->year ?></li>
                                <li><strong>Regista:</strong> <?php echo $titanic->director ?></li>
                                <li><strong>Durata:</strong> <?php echo $titanic->duration ?> minuti</li>
                                <li><strong>Film lungo?</strong> <?php echo $titanic->isLongMovie() ?></li>
                                <li><strong>Film recente?</strong> <?php echo $titanic->isRecent() ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Coco -->
            <div class="col-md-6">
                <div class="card h-100 bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $coco->title ?></h5>
                        <div class="card-text">
                            <ul class="list-unstyled">
                                <li><strong>Descrizione:</strong> <?php echo $coco->getDescription() ?></li>
                                <li><strong>Anno:</strong> <?php echo $coco->year ?></li>
                                <li><strong>Regista:</strong> <?php echo $coco->director ?></li>
                                <li><strong>Durata:</strong> <?php echo $coco->duration ?> minuti</li>
                                <li><strong>Film lungo?</strong> <?php echo $coco->isLongMovie() ?></li>
                                <li><strong>Film recente?</strong> <?php echo $coco->isRecent() ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
</body>
</html>