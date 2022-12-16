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

var_dump($Movie1);
?>