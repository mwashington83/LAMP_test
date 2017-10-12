<?php
 require_once ("contact.php");

 class AddressBook {

    private $contacts;

    public function __construct() {
        $this->contacts = array();
        }

    public function getAllContacts() {
        return $this->contacts;
    }

    public function addContact($contacts){
        $this->contacts[] = $contacts;
    }   

    public function updateContact($old_contact, $new_contact) {
        $index = array_search($old_contact, $this->contacts);
        if($index) {
       $this->contacts[$index] = $newcontact;
        }
    }

    public function deleteContact($contact) {
        $index = array_search($contact, $this->contacts);
        if($index) {
            unset($this->contact[$index]); 
        }
    } 

    public function getContact($first_name) {
        foreach ($this->contacts as $contact) {
            if($contact->getPerson()->getFirstName() == $first_name) {
                return $contact;
            }
        }
    }
}

 ?>