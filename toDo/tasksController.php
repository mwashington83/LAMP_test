<?php
 require_once ("dbController.php");
 require_once ("fileHandler.php");
 require_once ("Traits/databaseConnected.php");

 class AddressBook {

    use Traits\DatabaseConnected;

    private $tasks;
    // private $fileHandler;
    // private $databaseHandler;

    public function __construct() {
        
        // $this->fileHandler = new FileHandler ("myAddressBook.txt");
        // $this->contacts = $this->fileHandler->readFile();
        // $this->databaseHandler = new DatabaseHandler();
        $this->tasks = $this->getDatabaseHandler()->readDatabase();
        
        }

    public function getAllTasks() {
        return $this->tasks;
    }

    public function createTasks($tasks){
        $this->tasks[] = $tasks;
        // $this->fileHandler->writeFile($this->contacts);
        $this->getDatabaseHandler()->insertItem($tasks);
    }   

    public function completeTasks ($contact, $id) {
    //     $index = array_search($old_contact, $this->contacts);
    //     if($index >= 0) {
    //    $this->contacts[$index] = $new_contact;
    // //    $this->fileHandler->writeFile($this->contacts);
       $this->getDatabaseHandler()->updateItem($contact,$id);
    //    old_contact->getId()
        }
            
}

 ?>