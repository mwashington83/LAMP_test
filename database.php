<?php

function getConnection() {
    $host = 'localhost';
    $schema = 'Nancy';
    $user = 'root';
    $password = 'baconbacon';
    
    
        $connection = new mysqli($host, $user, $password, $schema);  
        
        if($connection->connect_error){
         die ($connection->connect_error);
        } 
        
        return $connection;
    }

  function insertCat($name, $color, $breed, $age) {
        $connection = getConnection();

    $query = "INSERT INTO cats (name, color, breed, age) 
    VALUES ('$name', '$color', '$breed','$age')";

    $result = $connection->query($query);

    if(!$result) {
        echo "Insert failed: " . $connection->error;
    } else {
        echo "Data inserted successfully!";
    }
    $connection->close();
}

function getCats() {
    $connection=getConnection();

    $query = "SELECT * FROM cats";
    $result = $connection->query($query);
    
    if(!$result) {
        die ("Select failed: " . $connection->error);
    }

    $rows = $result->num_rows;

    $data = array();

    for ($i = 0; $i < $rows; $i++){
        $result->data_seek($i);
        $data[] = $result->fetch_assoc();
        }

        $result->close();
        $connection->close();

        return $data;

    }

    //print_r(getCats());



    
?>