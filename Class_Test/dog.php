<?php

class Dog
{
    const NUMBER_OF_PAWS = 4;
    static $is_tame = true;

    private $name;
    private $isSittingDown;
    private $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->isSittingDown = false;
        $this->color = $color;
    }

    public function __destruct(){
        // echo "<br /> Bye bye, $this->name is going away";
    }

    public function whatColor() {

        echo "<br />I am $this->color. ";
    }

    static public function isTame() {

        if (self::$is_tame){
          echo "<br />I'm tame.<br />";  
        } else {
            echo "<br />I'm feral. <br />";
        }
    }

    public function paws() {
        echo "I have " . self ::NUMBER_OF_PAWS . " paws";
        
    }


    public function bark()
    {
        echo "Woof Woof, my name is $this->name <br />";
    }

    public function sit($treat)
    {

        if($treat == null) {
        echo "You better give me a treat first <br />";
        $this->isSittingDown = false;
    } else {
        echo "Woof, you are my favorite human!<br />";
        $this->isSittingDown = true;
    }
    }

    public function isSittingDown() 
    {
        if($this->isSittingDown) {
            echo "$this->name is sitting down <br />";
        } else {
            echo "$this->name is chasing his tail <br />";
        }
    }
}

// $dog = new Dog("Fido");
// $dog->paws();

// echo "<br />Dogs have " . Dog::NUMBER_OF_PAWS . " paws";

class YellowLab extends Dog {
    public function __construct($name) {
        parent::__construct($name, "yellow");
    }
}

class BlackLab extends Dog {
    public function __construct($name) {
        parent::__construct($name, "black");
    }
}

$fido = new YellowLab ("Fido");
$fido->whatColor();
$fido->bark();

echo "<br />";

$rover = new Blacklab ("Rover");
$rover->whatColor();
$rover->bark();


// Dog::isTame();

?>

