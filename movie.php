<?php

class Movie{
    public $title;
    public $type;
    public $poster;

    public function __construct($_title, $_type, $_poster){
        $this -> title = $_title;
        $this -> type = $_type;
        $this -> poster = $_poster;
    }
}
?>