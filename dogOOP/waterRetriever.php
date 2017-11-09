<?php
require_once "swimmer.php";
require_once "retriever.php";

trait waterRetriever {
    use Retriever,Swimmer;
    

    function fetchDuck(){
        $this->swim();
        $this->fetch();
        $this->swim();
        
        echo "Fetch the Duck Water Retriever <br />";
}
}