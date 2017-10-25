<?php
 require_once ("contact.php");
 require_once ("fileHandler.php");
 require_once ("databaseHandler.php");

 class AddressBook {

    private $contacts;
    private $fileHandler;
    private $databaseHandler;

    public function __construct() {
        
        $this->fileHandler = new FileHandler ("myAddressBook.txt");
        // $this->contacts = $this->fileHandler->readFile();
        $this->databaseHandler = new DatabaseHandler();
        $this->contacts = $this->databaseHandler->readDatabase();
        
        }

    public function getAllContacts() {
        return $this->contacts;
    }

    public function addContact($contacts){
        $this->contacts[] = $contacts;
        // $this->fileHandler->writeFile($this->contacts);
        $this->databaseHandler->insertItem($contacts);
    }   

    public function updateContact ($contact, $id) {
    //     $index = array_search($old_contact, $this->contacts);
    //     if($index >= 0) {
    //    $this->contacts[$index] = $new_contact;
    // //    $this->fileHandler->writeFile($this->contacts);
       $this->databaseHandler->updateItem($contact,$id);
    //    old_contact->getId()
        }

    public function deleteContact($contact) {
        $index = array_search($contact, $this->contacts);

        echo "index: $index <br />";

        if($index >= 0) {        
            unset($this->contacts[$index]); 
            $this->fileHandler->writeFile($this->contacts);
        }
    } 

    public function getContact($first_name) {
        foreach ($this->contacts as $contact) {
            if($contact->getPerson()->getFirstName() == $first_name) {
                return $contact;
            }
        }
    }

    public function getContactbyID($id) {
        foreach ($this->contacts as $contact) {
            if($contact->getID() == $id) {
                return $contact;
            }
        }
    }
            
}

 ?>