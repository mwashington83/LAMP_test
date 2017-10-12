<?php

//This is a single line comment

/*
This
Is
A 
Multiline
Comment

*/

$name = "Luke";
$age = 25; //int
$friends = Array("Obi", "Laia", "Darth");

echo '<stong>Hello ' . $name . '</stong><br />';
echo "You are " . $age . " old<br />";
echo $friends[2] . " is your father. <br />";

$copy_of_friends = $friends;//assigning a variable to another variable

foreach($copy_of_friends as $onefriend) {//iteration over an array
    echo $onefriend . "<br />";
}

$number_array = Array(1, 2, 3, 4, 5); //array of numbers

foreach($number_array as $number) {
    echo $number . " ";
}

$mixed_array = Array("Marquia", 1, 5, "Carlos");

foreach($mixed_array as $yall) {
    echo $yall . "<br />";
}

$multi_array = Array(
    Array(1, 2, 3, 4, 5),
    Array("Me", "You", "Us"),
    Array(12.3, 33, "Them")
);

foreach($multi_array as $x) {
    foreach($x as $y)//nested loop since mulitple arrays
    echo $y . "<br />";//nested loops are confusing and rarely used
}