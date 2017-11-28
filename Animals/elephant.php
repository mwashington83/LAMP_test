<?php
require_once "abstractAnimal.php";
require_once "hostile.php";
require_once "iHunt.php";

class Elephant extends Animal Implements IHunt {

    use Hostile;
    public $elephant;

    public function getType(){
        return "Elephant";
    }

    public function isFriendly(){
       return "no "; 
    }

    public function chasePrey($prey, $catchChance){

        if ($prey == "Peanuts"){
            $randomNumber = rand(0, 100); 
            
          if ($randomNumber<=$catchChance) {
                    echo "I caught" . $prey;
                } 
         else {
                    echo $prey . "got away!";
            }
            
        }

        else {
            echo "Error.  No Peanuts here :(";
        }
                
                }

}

?>