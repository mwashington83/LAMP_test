<?php

require_once "pet.php";

class Cat extends Pet {

    private $breed;
    // private $nameTag;

    public function setBreed($breed) {
        $this->breed = $breed;
    }

    public function getBreed() {
        return $this->breed;
    }

    // public function breed()
    // {
    //     echo "I am a $this->breed <br />";
    // }

    public function purr() {
        return "Purrr";
    }

  
    }