<?php
    require_once("catFeederValidator.php");

    class CatFeeder {

    private $initialAmount;
    private $catFeederValidator;

        public function __construct($initialAmount){

            $this->initialAmount = $initialAmount;
            $this->catFeederValidator = new CatFeederValidator();

        } //constructor end

        public function initialAmount(){

            return $this->initialAmount;
        }
        private function handleRemainder(){
            
                }//handle Remainder End

        public function dispenseFood($portionSize) {

            $is_valid =
            $this->catFeederValidator->validateInitialAmount($this->initialAmount) &&
            $this->catFeederValidator->validatePortionSize($portionSize, $this->initialAmount);

        if(!$is_valid) {
        echo "Validation failed!";
        return;
        }
                    
            $this->initialAmount -= $portionSize;
                    
            $this->handleRemainder();
                    // return $portion;
                }//dispense food end

        public function addFood($addedAmount) {
                    
             $moreFood = $this->initialAmount + $addedAmount;
     
             $this->initialAmount += $addedAmount;
     
             }//end add food
     
     
         public function emptyFeeder($portionSize) 
         {
             echo "Received $this->initialAmount oz of food <br />";
             echo "Need to empty it using $portionSize oz Portion Size. <br />";
             while($this->initialAmount > 0) {
     
                 if($this->initialAmount >= $portionSize){
                 $this->dispenseFood ($portionSize);
                 
                 } elseif($this->initialAmount > 0) {
                    $this->dispenseFood ($portionSize); 
                    $this->initialAmount = 0;
                 }
                 echo "Dispensed $portionSize oz, 
                 have $this->initialAmount oz remaining. <br />";
             }//end empty feeder
        }

    }//class end

    // $feeder = new CatFeeder(600);
    // $feeder->emptyFeeder(3);

    
    
        
        // function testdispensefood($portionSize) {
            
       
        //     }
        // }

            

            

           




            


            /*if(is_numeric($initialAmount))
            if($initialAmount < $portionSize) {
                echo "Portion's out of control!";
            }
            elseif($portionSize > $initialAmount) {
                echo "Refill the feeder!";
            }
            elseif($portionSize $initialAmount = 0) {
                echo "We're out of everything!";
            }
            else($portionSize, $initialAmount = -1){
                echo "We have less than nothing!";
            }
        }*/
        
        
    

    

    //         echo "All Done!";
    // }
?>