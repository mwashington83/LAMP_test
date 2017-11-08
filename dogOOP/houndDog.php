<?php

require_once "pet.php";

class HoundDog extends Dog {

    public function __construct() {
        $this->setBreed("Hound Dog");
    }

    public function track() {
        return "where do you think you're going?";
    }
}