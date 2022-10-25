<?php

  class Movie {
    public $title;
    public $vote_average = NULL;
    public $poster_path;
    public $backdrop_path;

    public function __construct($_title, $_poster_path, $_backdrop_path)
    {
      $this->title = $_title;
      $this->poster_path = $_poster_path;
      $this->backdrop_path = $_backdrop_path;
    }
  }

?>