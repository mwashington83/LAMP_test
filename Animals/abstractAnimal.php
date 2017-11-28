<?php
 abstract class Animal{

    public $name;
    

  abstract function getType(); 
  abstract function isFriendly();
  

  public function getName(){
    return $this->name . " the " . $this->getType() . " is friendly: " . $this->isFriendly() ."<br />";
    // return $this->name;
  }

      }

?>