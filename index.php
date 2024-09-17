<?php

class Movie{
    //Variabili d'istanza
    public $title;
    public $genre;
    public $year;

    //Costruttore
    public function __construct($_title, $_year, ...$_genre)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    //Metodo per la descrizione del film
    public function getDescription(){
        return "<strong>Title: </strong>" . $this->title . " <hr> " . "<strong>Type of genre: </strong>" . implode(", ", $this->genre) . " <hr> " . "<strong>Year of release: </strong>" . $this->year . " <hr> ";
    }
}

//Oggetti Movie
$Van_Helsing = new Movie ("Van Helsing", 2004, "Horror", "Action");
$Tarzan = new Movie ("Tarzan", 1999, "Adventure", "Musical");
$Guardiani_Della_Galassia = new Movie ("Guardiani della Galassia", 2014, "Action", "Sci-fi");

echo $Van_Helsing ->getDescription();
echo $Tarzan ->getDescription();
echo $Guardiani_Della_Galassia ->getDescription();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP OOP 1</title>
</head>
<body>
    
</body>
</html>