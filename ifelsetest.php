<?php

    function testNumber($bar) {
        if ($bar > 100) {
            echo "100+";
        } 
        elseif ($bar > 50) {
            echo "50+";
        }
        elseif ($bar > 10) {
            echo "10+";
        }
    else {
        echo "9 or less";
    }
}

function testSwitch($bar) {
    switch($bar) {
        case $bar>100:
            echo "100+";
            break;
        case $bar > 50:
            echo "50+";
            break;
        case $bar > 10:
            echo "10+";
            break;
        default;
            echo "9 or less";
    

    }
}

testNumber(150);
echo "<br />";
testNumber(85);
echo "<br />";
testNumber(45);
echo "<br />";
testNumber(8);
echo "<br />";

testSwitch(150);
echo "<br />";
testSwitch(85);
echo "<br />";
testSwitch(45);
echo "<br />";
testSwitch(8);

for($i = 0; $i <=50; $i++) {

    if($i ==40) {
        continue;
    }
    echo "$i ";

    if($i ==40) {
    break;
    }
}

$foo = true;
$counter = 5;

    do {
    
    if($counter==5) {
        $foo = false;
    }

    $counter++;
    echo "bar ";
} while ($counter < 5); 

?>
