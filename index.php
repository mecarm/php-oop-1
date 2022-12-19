<?php
//HOMEPAGE

//Importo la classe da movie.php
include_once __DIR__ . '/movie.php';

// $Movie1 = new Movie();

// $Movie1 -> title = 'Batman';
// $Movie1 -> type = 'Fantasy';
// $Movie1 -> poster = 'https://upload.wikimedia.org/wikipedia/it/c/c4/The_Batman_%28film%29.png';

//associo l'istanza con il costruttore
$Movie1 = new Movie('Batman', 'Fantasy', 'https://upload.wikimedia.org/wikipedia/it/c/c4/The_Batman_%28film%29.png');
$Movie2 = new Movie('Spiderman', 'Fantasy', 'https://fumettologica.it/wp-content/uploads/2021/11/spider-man-no-way-home-poster-1.jpeg');
$Movie3 = new Movie('Benvenuti al sud', 'Comico', 'http://iicsanpietroburgo.esteri.it/iicmanager/img/sanpietroburgo/201401301314benvenuti_al_sud%20(1).jpg');

// var_dump($Movie1, $Movie2, $Movie3);
echo $Movie2->genereMovie();

$MovieArray = [$Movie1, $Movie2, $Movie3];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <h1>Lista film</h1>
   
    <div class="row justify-content-center">
        <?php
            foreach ($MovieArray as $card) {
                $card->displayProjectCard();
            } 
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>