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

    public function genereMovie(){
        echo "Il film $this->title è di genere $this->type";
    }
    public function displayProjectCard() {
        echo '<div class="card mt-4 w-25" >
                <div class="card-body">
                    <h5 class="card-title">' . $this->title . '</h5>
                    <p class="card-text">' . $this->type . '</p>
                    <img class="img-fluid" src="'. $this->poster .'">
                </div>
            </div>';
    }
}
?>