<?php
require_once('catfeeder.php');
require_once("catFeederValidator.php");

class catFeederTest {

    private $catFeeder;
    private $catFeederValidator;

    public function __construct($initialAmount) {
        $this->catFeeder = new CatFeeder($initialAmount);
        $this->catFeederValidator = new CatFeederValidator();
    }

    public function testDispenseFood() {
    // $initialAmount = 100;
    $portionSize = 5;

    $result = $this->catFeeder->dispenseFood($portionSize);

    if($result == 5) {
        echo "testDispenseFood: Test Passed!";
    } else {
        echo "testDispenseFood: Test Failed!  Expected 5 but received $result";
        }
    }    


    public function testaddFood(){
    //    $initialAmount = 50;
       $moreFood = 100;

       $result = addFood($moreFood);

       if($result ==100) {
           echo "testAddFood: Test Passed!";
       } else {
           echo "testAddFood: Test Failed!  Expected 100 but received $result";
       }
       }

         
    public function testValidateInitialAmount($initialAmount) {
          
           foreach($initialAmount as $key => $value)
           {
           $result = $this->catFeederValidator->validateInitialAmount($key);

           if($result != $value) {
               echo "<br />testValidateInitialAmount $key: Test Failed!
               Expected false but received $result";
               } else {
                   echo "<br />testValidateInitialAmount: Test Passed!";
               }
            }
        }
    
    public function testValidateportionSize($testKeyValuePairs, $initialSize) {
    foreach($testKeyValuePairs as $key => $value){
    $result = $this->catFeeder->validatePortionSize($key, $initialSize);
    

    if($result != $value) {
        echo "<br />testValidatePortionSize $key: Test Failed!
        Expected $value but received $result";
        } else {
            echo "<br />testValidatePortionSize: Test Passed!";
        }
     }
 }
}    

// testDispenseFood();
// "<br />";
// testAddFood();

// function validatePortionSize($initialAmount) {
//     $is_valid = is_numeric($initialAmount);
$a = array(); 

$keyValuePairs = array(
         
         "foo" => false,
          0 => false,
          -1 => false, 
          20 => true
); 

$keyValuePairsForPortionSize = array(
    
    "foo" => false,
     0 => false,
     -1 => false, 
     20 => false,
     1 => true,
     2 => true,
     3 => true
); 

$keyValuePairs2 = array(
    100 => false
);

$tester = new CatFeederTest(600);

$tester->testValidateInitialAmount($keyValuePairs);

$tester->testValidateInitialAmount($keyValuePairsForPortionSize, 250);

$tester->testValidateInitialAmount($keyValuePairs2, 50);


// $count = 0;
// while($count <=5){
//     testValidateInitialAmount($keyValuePairs);
//     echo "call pairs.". "<br>";
//     $count++;
// }

// $counter = 0;
// do 
//  echo "count is ". $counter * 5 . "<br>";
//  while($counter <=5){
// testValidatePortionSize($keyValuePairsForPortionSize, 250);

// }



// for$counter = 0;
// testValidatePortionSize($keyValuePairs2, 50);
?>