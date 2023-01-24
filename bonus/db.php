<?php
require __DIR__ . '/models/movie.php';
function getArrayFilm(){
    $movieArr = [
        $Avatar = new Movie('Avatar', ['Fantascienza', 'Azione', 'Avventura'], 2009, '20th Century Fox', '2,39:1', 'lorem ipsum'),
        $Luca = new Movie('Luca', ['Animazione', 'Avventura', 'Commedia', 'Fantastico'], 2021, 'Pixar', '1.85:1', 'lorem ipsum'),
    ];
    echo json_encode($movieArr);
}