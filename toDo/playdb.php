//Below is the code where i made all the changes to match my new db for the task list.  
//Above is the good code where I need to just switch out names and leave the require_once, but add new require_once.

// <?php
// require_once "tasks.php";
// Abstract class abstractDatabaseHandler Implements IDatabaseConnectable {
    
        

        
//         abstract function getDatabaseConnectionInfo();

// class dbController {

//     protected $connection;

//     const DATABASE_HOST ='localhost';
//     const DATABASE_SCHEMA = 'tasks';
//     const DATABASE_USER = 'developer';
//     const DATABASE_PASSWORD = 'baconbacon';
    
//         public function __construct(){
//             $this->connect();
                   
        
//         }
//         public function __destruct() {
//             $this->disconnect();
//         }
    
//         public function connect () {
//             $databaseConnectionInfo = $this->getDatabaseConnectionInfo();
    
//             $this->connection = new mysqli (
//                 $databaseConnectionInfo->hostName,
//                 $databaseConnectionInfo->user,
//                 $databaseConnectionInfo->password,
//                 $databaseConnectionInfo->schema
//             );
    
//             if($this->connection->connect_error){
//                 die ($this->connection->connect_error);
//                 } 
//         }  
        
       
    
//         public function disconnect() {
//             $this->connection->close();
//                 }
        


        
        
//         // class databaseConnectionInfo {
        
//         //     public $hostName;
//         //     public $schema;
//         //     public $user;
//         //     public $password;
//         // }
        

//         // <?php
        
//         //  require_once "abstractDBHandler.php";
//         //  require_once "databaseConnectionInfo.php";
         
//          // function getConnection() {
//         //     $host = 'localhost';
//         //     $schema = 'addressBook';
//         //     $user = 'root';
//         //     $password = 'baconbacon';
            
            
//         //         $connection = new mysqli($host, $user, $password, $schema);  
                
//         //         if($connection->connect_error){
//         //          die ($connection->connect_error);
//         //         } 
                
//         //         return $connection;
//         //     }
            
//         // public function getDatabaseConnectionInfo () {
//         //         $databaseConnectionInfo = new databaseConnectionInfo();
//         //         $databaseConnectionInfo->hostName = 'localhost';
//         //         $databaseConnectionInfo->schema = 'tasks';
//         //         $databaseConnectionInfo->user = 'root';
//         //         $databaseConnectionInfo->password = '';
        
//         //         return $databaseConnectionInfo;
//         //     }
//             const READ_QUERY = 'SELECT * FROM tasks';
//             const WRITE_QUERY = 'INSERT INTO tasks (
        
//                 Title,
//                 Complete                
//                 )
//                 VALUES';

//         public function getAllItems(){
//             $this->tasks=tasks;
//         }
        
//         // const UPDATE_QUERY = "UPDATE tasks SET 
            
//         //             ID = '%s',
//         //             Title = '%s',
//         //             Complete = '%s'
                    
                
//         //         WHERE ID = '%s'";
        
//         // const DELETE = "DELETE FROM contact WHERE id = '%s'";
        
//         const CREATE_TABLE_QUERY = "CREATE TABLE IF NOT EXISTS `tasks` (
//             `Id` int(10) NOT NULL,
//             `Title` varchar(50) NOT NULL,
//             `Complete` tinyint(1) NOT NULL,
//              ) ENGINE=InnoDB DEFAULT CHARSET=latin1;"; 
        
        
//             // public function __construct() {
//             //     parent::__construct();
//             //     $this->createTable();
//             // }
        
//             // private $connection;
        
//             // public function connectToDatabase () {
//             //     $this->connection = new mysqli (
//             //         self::DATABASE_HOST,
//             //         self::DATABASE_USER,
//             //         self::DATABASE_PASSWORD,
//             //         self::DATABASE_SCHEMA
//             //     );
        
//             //     if($this->connection->connect_error){
//             //         die ($this->connection->connect_error);
//             //         } 
          
//             // }        
        
//             // public function disconnectFromDatabase() {
//             //     $this->connection->close();
//             // }
            
//             public function readDatabase(){
        
//                 $tasks = array();
//                 // $this->connect();
        
//                 $data = $this->connection->query(self::READ_QUERY);
        
//                 if(!$data) {
//                 die ($this->connection->error);
//                 }
        
//             $rows = $data->num_rows;
        
//             for($i = 0; $i < $rows; $i++) {
//                 $data->data_seek($i);
//                 $item = $data->fetch_array(MYSQLI_ASSOC);
        
//                 $tasks = new tasks();
//                 $tasks->setID($item['Id']);
//                 $tasks->setTitle($item['Title']);
//                 $person->setComplete($item['Complete']);
                
        
                      
//                 $tasks[] = $tasks;
        
//                 // $contacts[] = $contact;
        
//             }
//                     $data->close();
//                     // $this->disconnect();
        
//                     return $tasks;
//         }
        
//             public function writeDatabase($contacts){
        
//                 $this->connectToDatabase();
        
//                 foreach($contacts as $item) {
//                     $query=self::WRITE_QUERY . 
//                     "(
//                     '".$item->getTitle()."',
//                     '".$item->getComplete()."',
//                      )";
        
//                     // echo "<br /> $query";
//                 }
        
//                 $result = $this->connection->query($query);
        
//                 if(!$result) {
//                     die($this->connection->error);
//                 }
        
//                 $this->disconnectFromDatabase();
//             }
//          public function insertItem($item)
//          {
//             $this->connectToDatabase();
            
//                     foreach($tasks as $item) {
//                         $query=self::WRITE_QUERY . 
//                         "(
//                         '".$item->getID()."',
//                         '".$item->getTitle()."',
//                         '".$item->getComplete()."',
//                         )";
            
//                         // echo "<br /> $query";
//                     }
            
//                     $result = $this->connection->query($query);
            
//                     if(!$result) {
//                         die($this->connection->error);
//                     }
            
//                     // $this->disconnect();
                     
//         //  public function updateItem($item, $idPerson)
//         //  {
//         //     // $this->connect();
        
//         //     $query=sprintf(self::UPDATE_QUERY,
            
//         //     $item->getPerson()->getFirstName(),
//         //     $item->getPerson()->getLastName(),
//         //     $item->getEmail(),
//         //     $id
//         //     );
        
//         //     echo "<br /> $query";
//         // //}
        
//         $result = $this->connection->query($query);
        
//         if(!$result) {
//             die($this->connection->error);
//         }
        
//         // $this->disconnect();
//         }
        
//         // public function createTable() {
//         //     // $this->connect();
//         //     $result = $this->connection->query(self::CREATE_TABLE_QUERY);
        
//         //     if (!$result) {
//         //         die($this->connection->error);
//         //     }
            
//         //     // $this->disconnect();
//         //     }
        
//         }
        
        
        
        
//         ?>