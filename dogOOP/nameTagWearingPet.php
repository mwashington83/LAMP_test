<?php

abstract class nameTagWearingPet extends Pet implements INameTagWearable {

    private $nameTag;

    public function setNameTag($nameTag, $where) {
        $this->nameTag = $nameTag;
    }

    public function getNameTag() {
        return $this->nameTag->getText();
    }
    
}
?>