<?php
require_once 'database.php';

$cats = getCats();

foreach($cats as $cat) {
    echo "Id: " . $cat['id'] . " | " . "Name: " . $cat['Name'] . " | " . "Color: " .
    $cat['Color'] . " | " . "Breed: " . $cat['Breed'] . "<br />";
}

?>