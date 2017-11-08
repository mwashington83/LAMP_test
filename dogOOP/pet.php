<?php


require_once "nameTag.php";

class Pet {

    private $name;
    private $nameTag;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName($name) {
        return $this->name;
    }

    public function setNameTag($nameTag) {
        $this->nameTag = $nameTag;
    }

    public function getNameTag($nameTag) {
        return $this->nameTag->getText();
    }

    }

?>