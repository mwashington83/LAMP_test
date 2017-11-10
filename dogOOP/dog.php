<?php

require_once "pet.php";
require_once "retriever.php";
require_once "mammalType.php";
require_once "petInterface.php";
require_once "nameTagWearingPet.php";

class Dog extends nameTagWearingPet implements INameTagWearable{
    
    
    // private $nameTag;
    
    // public function setNameTag($nameTag, $where) {
    //     $this->nameTag = $nameTag;
    // }

    // public function getNameTag() {
    //     return $this->nameTag->getText();
    // }

    use MammalType;
    

    // use Retriever;
   

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