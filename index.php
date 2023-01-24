<?php

class Movie{
    public $title;
    public $genre;
    public $year_release;
    public $publisher;
    public $length;
    public $synopsis;
    
    public function __construct($title, $genre, $year, $publisher, $length, $synopsis){
        $this -> title = $title;
        $this -> genre = $genre;
        $this -> year_release = $year;
        $this -> publisher = $publisher;
        $this -> length = $length;
        $this -> synopsis = $synopsis;
    }
    
    public function GetMovieInfo(){
        return $this->title . '<br>' .
            $this->genre . '<br>' .
            $this->year_release . '<br>' .
            $this->publisher . '<br>' .
            $this->length . '<br>' .
            $this->synopsis;
    }
}

$Avatar = new Movie('Avatar', 'Fantascienza', 2009, '20th Century Fox', '2,39:1', 'lorem ipsum');
$Luca = new Movie('Luca', 'Animazione', 2021, 'Pixar', '1.85:1', 'lorem ipsum');
echo $Avatar->GetMovieInfo();
echo '<br>';
echo $Luca->GetMovieInfo();