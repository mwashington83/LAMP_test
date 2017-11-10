<?php

abstract class snowDog {

    public function eat($howmuch){
        echo "Num Num. <br />";
        $this->playInSnow();
    }

    abstract function playInSnow();
}

?>