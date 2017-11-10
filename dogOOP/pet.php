<?php


require_once "nameTag.php";

abstract class Pet {

    private $name;
    private $nameTag;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName($name) {
        return $this->name;
    }

    // public function setNameTag($nameTag) {
    //     $this->nameTag = $nameTag;
    // }

    // public function getNameTag($nameTag) {
    //     return $this->nameTag->getText();
    // } Commented this out b/c we made Pet abstract and are assigning Name Tags to actual animals that can wear these.

    }

?>