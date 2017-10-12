<?php
require_once ("address.php");
require_once ("person.php");

class Contact {

    private $person;
    private $phone_number;
    private $email;
    private $address;
    private $type;
    private $comment;
    private $notes;

public function __construct() {
    $this->person = new Person();
    $this->address = new Address ();
    }

public function getPerson() {
    return $this->person;
    }

 public function setPerson($person) {
    $this->person = $person;
    }

public function getPhone_number() {
        return $this->phone_number;
        }
    
public function setPhone_number($phone_number) {
        $this->phone_number = $phone_number;
        }

public function getEmail() {
    return $this->email;
    }
        
public function setEmail($email) {
    $this->email = $email;
    }

public function getAddress() {
    return $this->address;
    }
            
public function setAddress($address) {
    $this->address = $address;
    }

public function getType() {
    return $this->type;
    }
                
public function setType($type) {
    $this->type = $type;
     }

public function getComment() {
    return $this->comment;
    }
                    
public function setComment($comment) {
    $this->comment = $comment;
    }

public function getNotes() {
    return $this->notes;
                }
                        
public function setNotes($notes) {
    $this->notes = $notes;
    }



}






?>