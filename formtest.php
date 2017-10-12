<?php
require_once 'database.php';

$name = 'Nothing';
$color = 'Nothing';
$breed = 'Nothing';
$age = 'Nothing';

$is_valid = true;

if(isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $is_valid = false;
}
if(isset($_POST['color'])) {
    $color = $_POST['color'];
}
if(isset($_POST['breed'])) {
    $breed = $_POST['breed'];
}
if(isset($_POST['age'])) {
    $age = $_POST['age'];
    } 

    if(!is_numeric($age)){
        $is_valid = false;
    }

if($is_valid) {
    insertCat($name, $color, $breed, $age);
} else {
    echo "Invalid input detected! <br />";
}



echo <<<_END
 <html>
 <head>
    <title>Form Test</title>
    </head>
 <body>
            Cat's name is: $name <br />
            Cat's color is: $color <br />
            Cat's breed is: $breed <br />
            Cat's age is: $age <br />

    <form method="post" action="formtest.php">
            What is cat's name?
            <input type="text" name="name"  placeholder="Enter Cat's Name Here" />
            <br />
            What is cat's color?
            <input type="color" name="color" required='required' />
            <br />
            What is cat's breed?
            <input type="text" name="breed" />
            <br />
            What is cat's age?
            <input type="text"  name="age" />
            <br />
            When is cat's birthday?
            <input type="datetime"  name="date" />
            <br />
            <input type="submit" />
            <br />
    </form>
  </body>
  </html>  

_END;


