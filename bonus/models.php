<?php

class Movie{
    public $title;
    public $genres;

    public function GetAllGenres(){
        foreach($this->genres as $genre){
            $str .= $genre . ' ';
        }
        return $str;
    }

    public $year_release;
    public $publisher;
    public $length;
    public $synopsis;
    
    public function __construct($title, array $genres, $year, $publisher, $length, $synopsis){
        $this -> title = $title;
        $this -> genres = $genres;
        $this -> year_release = $year;
        $this -> publisher = $publisher;
        $this -> length = $length;
        $this -> synopsis = $synopsis;
    }
    
    public function GetMovieInfo(){
        return $this->title . '<br>' .
            $this->GetAllGenres() . '<br>' .
            $this->year_release . '<br>' .
            $this->publisher . '<br>' .
            $this->length . '<br>' .
            $this->synopsis;
    }
}