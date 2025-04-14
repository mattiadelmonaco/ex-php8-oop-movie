<?php 

require_once "./Models/Movie.php";

var_dump($ilSignoreDegliAnelli);
var_dump($avengers);

echo $ilSignoreDegliAnelli->title . ":" . $ilSignoreDegliAnelli->isRecent() . "<br>";
echo $avengers->title . ":" . $avengers->isRecent() . "<br>";

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