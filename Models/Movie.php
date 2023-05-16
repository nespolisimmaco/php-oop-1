<?php

class Movie
{
    public $title;
    public $genres = [];
    public $year;
    public $director;

    function __construct($_title, $_genres)
    {
        $this->title = $_title;
        $this->genres = $_genres;
    }

    public function setData($_year, $_director)
    {
        $this->year = $_year;
        $this->director = $_director;
    }
}
