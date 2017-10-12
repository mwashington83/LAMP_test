<?php

andAB(1, 0);
andAB(0, 1);
andAB(1, 1);
andAB(0, 0);

function andAB ($A, $B) {

if ($A && $B) {
    $result = 'True';
} else {
    $result = 'False';
}

echo "A = $A : B = $B : Result: $result <br />";
}

orAB(1, 0);
orAB(0, 1);
orAB(1, 1);
orAB(0, 0);

function orAB ($A, $B) {

if ($A || $B) {
    $result = 'True';
} else {
    $result = 'False';
}

echo "A = $A : B = $B : Result: $result <br />";
}

xorAB(1, 0);
xorAB(0, 1);
xorAB(1, 1);
xorAB(0, 0);

function xorAB ($A, $B) {

if ($A xor $B) {
    $result = 'True';
} else {
    $result = 'False';
}

echo "A = $A : B = $B : Result: $result <br />";
}

notA(1);
notA(0);

function notA ($A) {

if ($A) {
    $result = 'True';
} else {
    $result = 'False';
}

echo "A = $A : Result: $result <br />";
}


