<?php
require_once "dog.php";
require_once "iTrainable.php";

class TrainableDog extends Dog implements ITrainable

{
        function learnTrick($trick){
            echo "rollover <br />";
        }
        function doTrick($trick){
            echo "Woof.  I've Rolled Woof <br />";
        }
        function getReward($snack){
            echo "Where's my snack.  Rummm. <br />";
    }
    }
    

?>