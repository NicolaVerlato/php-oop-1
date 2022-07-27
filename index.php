<?php
class Movie{
    public $name;
    public $duration;
    public $cast = 'Non disponibile';
    public $trailer = 'Non disponibile';

    public function __construct($_name, $_duration){
        $this->name = $_name;
        $this->duration = $_duration;
    }
    
    public function isAvialable(){
        if($this->trailer === 'Non disponibile'){
            echo 'Non disponibile';
        } else{
            echo 'Clicca qui';
        }
    }
};

$firstFilm = new Movie('Ritorno al Futuro', '150');

$secondFilm = new Movie('The Tourist', '120');
$secondFilm->trailer = 'disponibile';
$secondFilm->cast = 'Angelina Jolie, Johnny Depp';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Film della settimana</h1>

    <ol>
        <li>
            <h3><?php echo $firstFilm->name ?></h3>
            <div>
                <span>-> Trailer: </span><a href=""><?php echo $firstFilm->isAvialable() ?></a>
                <div>-> Durata: <?php echo $firstFilm->duration ?> minuti</div>
                <div>-> Cast: <?php echo $firstFilm->cast ?></div>
            </div>
        </li>

        <li>
            <h3><?php echo $secondFilm->name ?></h3>
            <div>
                <span>-> Trailer: </span><a href="https://www.youtube.com/watch?v=RaevzewXRnw"><?php echo $secondFilm->isAvialable() ?></a>
                <div>-> Durata: <?php echo $secondFilm->duration ?> minuti</div>
                <div>-> Cast: <?php echo $secondFilm->cast ?></div>
            </div>
        </li>
    </ol>
</body>
</html>