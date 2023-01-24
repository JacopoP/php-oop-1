<?php

class Movie{
    public $title;
    public $year_release;
    public $length;
    public $synopsis;
    public $vote;
    
    public function __construct($title, $year, $length, $synopsis, $vote){
        $this -> title = $title;
        $this -> year = $year;
        $this -> length = $length;
        $this -> synopsis = $synopsis;
        $this -> vote = $vote;
    } 
}