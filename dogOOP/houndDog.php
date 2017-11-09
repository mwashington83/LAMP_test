<?php

require_once "pet.php";
require_once "dogTraitTracker.php";
require_once "waterRetriever.php";
require_once "dog.php";

class HoundDog extends Dog {

    use waterRetriever;

    // use Tracker, Retriever {
    //     Tracker::sayHello insteadOf Retriever;
    //     Retriever::sayHello as retrieverSayHello;
    //     Retriever::protectedWoof as public;
    //     }

    public function __construct() {
        $this->setBreed("Hound Dog");
    }


    // public function sayHello() {
    //     echo "Hello from Hound Dog";
    // }

    // public function track() {
    //     return "where do you think you're going?";
    // }

    
    
    
    
}