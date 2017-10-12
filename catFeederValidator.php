<?php
    
    class CatFeederValidator {
        
                        
        public function validateAddFood($amountToAdd, $currentAmount, $capacity) {

            $is_valid = is_numeric($amountToAdd);
            
            if(!$is_valid) {
                echo "Amount to add is not numeric";
                return false;
            }  

            $is_valid = is_numeric($currentAmount);
            
            if(!$is_valid) {
                echo "Current amount is not numeric";
                return false;
            }  

            $is_valid = is_numeric($capacity);
            
            if(!$is_valid) {
                echo "Capacity is not numeric";
                return false;
            }  

            $is_valid = $amountToAdd > 0;
            
            if(!$is_valid) {
                echo "Amount to add should be greater than zero";
                return false;
            }  

            $is_valid = $currentAmount >= 0;
            
            if(!$is_valid) {
                echo "Current amount should be greater than or equal to zero";
                return false;
            }  

            $is_valid = $capacity > 0;
            
            if(!$is_valid) {
                echo "Capacity should be greater than zero";
                return false;
            }  

            $is_valid = $amountToAdd + $currentAmount <= $capacity;
            if (!$is_valid) {
                echo "You're going to overfeed me! <br />";
            }

            return $is_valid;
        }

        public function validateInitialAmount($initialAmount) {
        $is_valid = is_numeric($initialAmount);
        
        if(!$is_valid) {
            echo "Initial amount is not numeric";
            return false;
        }  

        $is_valid = $initialAmount > 0;

        if(!$is_valid) {
            echo "Initial amount should be greater than zero";
            return false;
        }

        return true;
    }

        public function validatePortionSize($portionSize, $initialAmount, $acceptablePortionSizes){
        
        $is_valid = is_numeric($portionSize);
        if(!$is_valid) {
            echo "Portion size is not numeric";
            return false;
        }

        $is_valid = $initialAmount > 0;

       
        $is_valid = $portionSize > 0;
        
        if(!$is_valid) {
        echo "Portion size should be greater than zero";
        return false;
        }

        $is_valid = $portionSize <= $initialAmount;

        if(!$is_valid) {
            echo "Portion size should be less than initial amount";
            return false;
        }
            
            // switch($portionSize) {
            //     case 1:
            //         $is_valid = true;
            //         break;
            //     case 2:
            //         $is_valid = true;
            //     case 3:
            //         $is_valid = true; 
            //         break;
            //     //     $portionSize = 1:
            //     //     echo "you've dispensed 1 cup";
            //     //     break;
            //     // case $portionSize = 2:
            //     //     echo "you've dispensed 2 cups";
            //     //     break;
            //     // case $portionSize = 3:
            //     //     echo "you've dispensed 3 cups";
            //     //     break;
            //     default;
            $is_valid = in_array($portionSize, $acceptablePortionSizes);
            // echo "You've effectively either starved or overfed your cat";
            //         break;
            if (!$is_valid) {
                echo "is not valid portion size.";
            }        // }

        return $is_valid;
    }
} 
    
       

?>