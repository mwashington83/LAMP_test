<?php

$string1 = 'foo';
$string2 = 'bar';

$string3 = $string1.$string2;

$string1.=$string2;

echo "$string1 <br />";
echo "$string2 <br />";
echo "$string3 <br />";

echo "dddddddddddddddddddddddjkljkldddddddddddddddddddddddddkljkl
fjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjhjakshfdjhkahslfhjkahsiufeansfkjnf
gfjkflsjdgoriesngoisprtijgsopeij";

echo '<br />';

echo $string4 = <<<_END
dddddddddddddddddddddddjkljkldddddddddddddddddddddddddkljkl
fjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjhjakshfdjhkahslfhjkahsiufeansfkjnf
gfjkflsjdgoriesngoisprtijgsopeij
_END;

?>