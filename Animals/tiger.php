<?php
require_once "abstractAnimal.php";
require_once "friendly.php";
require_once "iHunt.php";

class Tiger extends Animal Implements IHunt{

    use Friendly;
    public $tiger;
    
    

    public function getType(){
        return "Tiger";
    }

    public function isFriendly(){
        return "yes"; 
     }

    public function chasePrey($prey, $catchChance){

        $randomNumber = rand(0, 100); 
        
      if ($randomNumber<=$catchChance) {
                echo "I caught" . $prey;
            } 
     else {
                echo $prey . "got away!";
        }

        }
    }



?>
