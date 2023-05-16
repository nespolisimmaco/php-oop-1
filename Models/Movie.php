<?php

class Movie
{
    public $title;
    public $genre;
    public $year;
    public $director;

    function __construct($_title, $_genre)
    {
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function setData($_year, $_director)
    {
        $this->year = $_year;
        $this->director = $_director;
    }

    public function printData()
    {
        return "Titolo del film: {$this->title} - Genere/i: {$this->genre} - Anno: {$this->year} - Regista: {$this->director}";
    }
}
