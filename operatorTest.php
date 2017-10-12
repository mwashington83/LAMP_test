<?php
$number1 = 0;
$number2 = 1;
$number3 = 50;

$result = 0;

$result = $number1 + $number2;//addition

echo $result . '<br />';

$result = $number1 - $number2;//subtraction

echo $result . '<br />';

$result = $result + 5;//direct assignment

echo $result . '<br />';

$result += 5;//shortcut

echo $result . '<br />';

$result -= 2;//shortcut, the same as $result = $result - 2;

echo $result . '<br />';

$result++;//post-increment, the same as $result = $result + 1;

echo $result . '<br />';

++$result;//pre-increment, the same as $result = $result + 1;

echo $result . '<br />';

$result--;//post-decrement, the same as $result = $result + 1;

echo $result . '<br />';

--$result;//pre-decrement, the same as $result = $result + 1;

echo $result . '<br />';

$result= 2 * 5;//multiplication

echo $result . '<br />';

$result= 30 / 2;//division

echo $result . '<br />';

$result *= 2;//multiplication shortcut

echo $result . '<br />';

$result /= 2;//division shortcut

echo $result . '<br />';

$result = 25 % 4; //modulus - remainder.  the answer is 4

echo $result . '<br />';





?>