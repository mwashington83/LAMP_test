<?php

require_once "pet.php";

class Dog extends Pet {

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

    public function fetch($breed) {
        return "Woof";
    }

  
    }
    // private $name;
    // private $nameTag;

    // public function setName($name) {
    //     $this->name = $name;
    // }

    // public function getName($name) {
    //     return $this->name;
    // }

    // public function setNameTag($nameTag) {
    //     $this->nameTag = $nameTag;
    // }

    // public function getNameTag($nameTag) {
    //     return $this->nameTag->getText();
    // }

    

    // $breed = new Breed("Chow");




   

    // $dog = new Dog ();
    // $dog->setName('Fido');
    // $nameTag = new nameTag ();
    // $nameTag->setText('Fido'.' If found call 678-GET-HELP');

    // echo $dog->getNameTag();



?>