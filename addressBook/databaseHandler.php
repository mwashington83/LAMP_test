<?php

// function getConnection() {
//     $host = 'localhost';
//     $schema = 'addressBook';
//     $user = 'root';
//     $password = 'baconbacon';
    
    
//         $connection = new mysqli($host, $user, $password, $schema);  
        
//         if($connection->connect_error){
//          die ($connection->connect_error);
//         } 
        
//         return $connection;
//     }

class databaseHandler{

    
    const DATABASE_HOST ='localhost';
    const DATABASE_SCHEMA = 'addressBook';
    const DATABASE_USER = 'developer';
    const DATABASE_PASSWORD = 'baconbacon';
    const READ_QUERY = 'SELECT * FROM Contact';
    const WRITE_QUERY = 'INSERT INTO Contact (

        firstName,
        lastName,
        email,
        phone, 
        notes,
        comments,
        street, 
        city, 
        state, 
        zip,
        type
        )
        VALUES';

const UPDATE_QUERY = "UPDATE Contact SET 
    
            firstName = '%s',
            lastName = '%s',
            email = '%s',
            phone = '%s', 
            notes = '%s',
            comments = '%s',
            street = '%s', 
            city = '%s', 
            state = '%s', 
            zip = '%s',
            type = '%s'
        
        WHERE idPerson = '%s'";

// const DELETE = "DELETE FROM contact WHERE id = '%s'";

const CREATE_TABLE_QUERY = "CREATE TABLE IF NOT EXISTS `contact` (
    `id` int(11) NOT NULL,
    `firstName` varchar(50) NOT NULL,
    `lastName` varchar(50) NOT NULL,
    `email` varchar(100) DEFAULT NULL,
    `phone` varchar(45) NOT NULL,
    `notes` varchar(100) DEFAULT NULL,
    `comments` varchar(100) DEFAULT NULL,
    `street` varchar(75) DEFAULT NULL,
    `city` varchar(45) DEFAULT NULL,
    `state` varchar(45) DEFAULT NULL,
    `zip` varchar(45) DEFAULT NULL,
    `type` varchar(45) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;"; 

    public function __construct() {
        $this->createTable();
    }

    private $connection;

    public function connectToDatabase () {
        $this->connection = new mysqli (
            self::DATABASE_HOST,
            self::DATABASE_USER,
            self::DATABASE_PASSWORD,
            self::DATABASE_SCHEMA
        );

        if($this->connection->connect_error){
            die ($this->connection->connect_error);
            } 
  
    }        

    public function disconnectFromDatabase() {
        $this->connection->close();
    }
    
    public function readDatabase(){

        $contacts = array();
        $this->connectToDatabase();

        $data = $this->connection->query(self::READ_QUERY);

        if(!$data) {
        die ($this->connection->error);
        }

    $rows = $data->num_rows;

    for($i = 0; $i < $rows; $i++) {
        $data->data_seek($i);
        $item = $data->fetch_array(MYSQLI_ASSOC);

        $person = new Person();
        $person->setFirstName($item['firstName']);
        $person->setLastName($item['lastName']);
        

        $address = new Address();
        $address->setStreet($item['street']);
        $address->setCity($item['city']);
        $address->setState($item['state']);
        $address->setZip($item['zip']);

        $contact = new Contact();
        $contact->setPerson($person);
        $contact->setAddress($address);
        $contact->setEmail($item['email']);
        $contact->setPhoneNumber($item['phone']);
        $contact->setNote($item['notes']);
        $contact->setComment($item['comments']);
        $contact->setType($item['type']);

        $contact->setId($item['id']);

        $contacts[] = $contact;

    }
            $data->close();
            $this->disconnectFromDatabase();

            return $contacts;
}

    // public function writeDatabase($contacts){

    //     $this->connectToDatabase();

    //     foreach($contacts as $item) {
    //         $query=self::WRITE_QUERY . 
    //         "(
    //         '".$item->getPerson()->getFirstName()."',
    //         '".$item->getPerson()->getLastName()."',
    //         '".$item->getEmail()."',
    //         '".$item->getPhone_number()."',
    //         '".$item->getNotes()."',
    //         '".$item->getComment()."',
    //         '".$item->getAddress()->getStreet()."',
    //         '".$item->getAddress()->getcity()."',
    //         '".$item->getAddress()->getstate()."',
    //         '".$item->getAddress()->getZip()."',
    //         '".$item->getType()."'
    //         )";

    //         // echo "<br /> $query";
    //     }

    //     $result = $this->connection->query($query);

    //     if(!$result) {
    //         die($this->connection->error);
    //     }

    //     $this->disconnectFromDatabase();
    // }
 public function insertItem($item)
 {
    $this->connectToDatabase();
    
            // foreach($contacts as $item) {
                $query=self::WRITE_QUERY . 
                "(
                '".$item->getPerson()->getFirstName()."',
                '".$item->getPerson()->getLastName()."',
                '".$item->getEmail()."',
                '".$item->getPhoneNumber()."',
                '".$item->getNote()."',
                '".$item->getComment()."',
                '".$item->getAddress()->getStreet()."',
                '".$item->getAddress()->getcity()."',
                '".$item->getAddress()->getstate()."',
                '".$item->getAddress()->getZip()."',
                '".$item->getType()."'
                )";
    
                // echo "<br /> $query";
            //}
    
            $result = $this->connection->query($query);
    
            if(!$result) {
                die($this->connection->error);
            }
    
            $this->disconnectFromDatabase();
 }
    
 public function updateItem($item, $idPerson)
 {
    $this->connectToDatabase();

    $query=sprintf(self::UPDATE_QUERY,
    
    $item->getPerson()->getFirstName(),
    $item->getPerson()->getLastName(),
    $item->getEmail(),
    $item->getPhoneNumber(),
    $item->getNote(),
    $item->getComment(),
    $item->getAddress()->getStreet(),
    $item->getAddress()->getCity(),
    $item->getAddress()->getState(),
    $item->getAddress()->getZip(),
    $item->getType(),
    $idPerson
    );

    echo "<br /> $query";
//}

$result = $this->connection->query($query);

if(!$result) {
    die($this->connection->error);
}

$this->disconnectFromDatabase();
}

public function createTable() {
    $this->connectToDatabase();
    $result = $this->connection->query(self::CREATE_TABLE_QUERY);

    if (!$result) {
        die($this->connection->error);
    }
    
    $this->disconnectFromDatabase();
    }
 
}




?>