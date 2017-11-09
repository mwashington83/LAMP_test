<?php

require_once "pet.php";
require_once "retriever.php";
require_once "mammalType.php";

class Dog extends Pet {

    // use Retriever;
    use MammalType;

    private $breed;
    // private $nameTag;

    public function setBreed($breed) {
        $this->breed = $breed;
    }

    public function getBreed() {
        return $this->breed;
    }

    // public function sayHello() {
    //     echo "Hello from Dog";
    // }

    // public function breed()
    // {
    //     echo "I am a $this->breed <br />";
    // }

    // public function fetch($breed) {
    //     return "Woof";
    // }

  
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