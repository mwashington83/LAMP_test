<?php

require_once "pet.php";
require_once "petInterface.php";
require_once "nameTagWearingPet.php";



class Cat extends nameTagWearingPet Implements INameTagWearable {

    // private $nameTag;
     
    // public function setNameTag($nameTag, $where) {
    //     $this->nameTag = $nameTag;
    // }

    // public function getNameTag() {
    //     return $this->nameTag->getText();
    // }


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