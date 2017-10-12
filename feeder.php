<?php
require_once "catFeederValidator.php"; 
class Feeder {

private  $portionSizes; 
private $foodBinCapacity; 
private $catFeederValidator; 
private $currentFoodAmount;

public function __construct($foodBinCapacity, $portionSizes) {

$this -> portionSizes = $portionSizes; 
$this -> foodBinCapacity = $foodBinCapacity; 
$this -> catFeederValidator = new CatFeederValidator(); 
$this-> currentFoodAmount = 0;

// $keyValuePortionSizes = array(

//     ,
//      0 => false,
//      -1 => false, 
//      20 => false,
//      1 => true,
//      2 => true,
//      3 => true
// ); This array isn't necessary b/c we called out the specific
    // array of the food being dispensed in the separate class for both
    // dogfeeder and catfeeder.
    }//end constructor
              
    public function foodBinCapacity(){
        
        return $this->foodBinCapacity;
        } //endFoodbin

    public function portionSizes(){
            
        return $this->portionSizes;
            }//endportionsizes
        
        
    public function dispenseFood($portionSize) {
        
        $is_valid =
        $this->catFeederValidator->validateInitialAmount($this->currentFoodAmount) &&
        $this->catFeederValidator->validatePortionSize(
        $portionSize,
        $this->currentFoodAmount,
        $this->portionSizes);
        
        if(!$is_valid) {
            die ("Validation failed!");
            }
                            
                    $this->currentFoodAmount -= $portionSize;
                            
                    // $this->handleRemainder();
                    //         // return $portion;
                        }//dispense food end
        
    public function addFood($addedAmount) {

        $is_valid = $this->catFeederValidator->validateAddFood(
            $addedAmount,
            $this->currentFoodAmount,
            $this->foodBinCapacity
            );
            if(!$is_valid) {
                die ("Validation failed!");
                }
        
                            
                    //  $moreFood = $this->currentFoodAmount + $addedAmount;
        $this->currentFoodAmount += $addedAmount;
           }//end add food
             
             
                 public function emptyFeeder($portionSize) 
                 {
                     echo "Received $this->currentFoodAmount oz of food <br />";
                     echo "Need to empty it using $portionSize oz Portion Size. <br />";
                     while($this->currentFoodAmount > 0) {
             
                         if($this->currentFoodAmount >= $portionSize){
                         $this->dispenseFood ($portionSize);
                         
                         } elseif($this->currentFoodAmount > 0) {
                            $this->dispenseFood ($portionSize); 
                            $this->currentFoodAmount = 0;
                         }
                         echo "Dispensed $portionSize oz, 
                         have $this->currentFoodAmount oz remaining. <br />";
                     }//end empty feeder
                }
        
            }//class end
    

  
?>
