<?php

require_once "iDatabaseConnectable.php";
// require_once "databaseHandler.php";

Abstract class abstractDatabaseHandler Implements IDatabaseConnectable {

    protected $connection;
    // const DATABASE_HOST ='localhost';
    // const DATABASE_SCHEMA = 'addressBook';
    // const DATABASE_USER = 'developer';
    // const DATABASE_PASSWORD = 'baconbacon';
    abstract function getDatabaseConnectionInfo();

    public function __construct(){
        $this->connect();
               
    
    }
    public function __destruct() {
        $this->disconnect();
    }

    public function connect () {
        $databaseConnectionInfo = $this->getDatabaseConnectionInfo();

        $this->connection = new mysqli (
            $databaseConnectionInfo->hostName,
            $databaseConnectionInfo->user,
            $databaseConnectionInfo->password,
            $databaseConnectionInfo->schema
        );

        if($this->connection->connect_error){
            die ($this->connection->connect_error);
            } 
    }  

    public function disconnect() {
        $this->connection->close();
            }
    }

    