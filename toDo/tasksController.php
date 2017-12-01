<?php
 require_once ("dbController.php");
 require_once ("tasks.php");
 //require_once ("Traits/databaseConnected.php");

 class TaskController {

    // use Traits\DatabaseConnected;
    private $dbController;

    public function getAllTasks() {
        $dbController = new dbController();
        return $dbController->readDatabase();

        
    }

    public function createTasks($title){
        $tasks = new Tasks();
        // $mysqldate = date ("Y-m-d H:i:s", time());

        $tasks->setTitle ($title);
        $tasks->setIsComplete (0);
        // $tasks->setDateCreated ($mysqldate);

        $dbController = new dbController();
        $dbController->insertItem($tasks);


        header("Location: listTasks.php");
        exit();
    }

        

        public function completeTask($id) {
            $task = new Tasks();
            // $mysqldate = date ("Y-m-d H:i:s", time()); - Figure out how to convert to date from php to mysql

            $task->setIsComplete (1);
            // $task->setDateCompleted ($mysqldate);

            $dbController = new dbController();
            $dbController->updateItem($task, $id);

            header("Location: listTasks.php");
            exit();
            
        }
     
} 

    

    if(isset($_POST["Title"])){
        $title = $_POST["Title"];
        $taskController = new TaskController();
        $taskController->createTasks($title);
    }
    

    if(isset($_POST["taskId"])){
        $taskID = $_POST["taskId"];
        $taskController = new TaskController();
        $taskController->completeTask($taskID);
    }
        

 ?>
