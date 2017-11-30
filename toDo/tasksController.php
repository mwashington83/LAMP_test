<?php
 require_once ("dbController.php");
 require_once ("tasks.php");
 //require_once ("Traits/databaseConnected.php");

 class TaskController {

    // use Traits\DatabaseConnected;
    private $dbController;

    public function getAllTasks() {
        $dbController = new dbController();
        return $dbControll->readDatabase();

        header("Location: listTasks.php");
        exit();
    }

    public function createTasks($title){
        $tasks = new Task();

        $task->setTitle ($title);
        $task->setisComplete (0);
        $dbController = new dbController();
        $dbController->insertItem($task);

        echo 'Task created successfully';
        // $this->fileHandler->writeFile($this->contacts);
        // $this->getDatabaseHandler()->insertItem($tasks);
    }  
} 

    $title = $_POST["title"];

    if(is_set($title)){
        $taskController = new TaskController();
        $taskController->createTask($title);
    }
    

    // public function completeTasks ($contact, $id) {
    // //     $index = array_search($old_contact, $this->contacts);
    // //     if($index >= 0) {
    // //    $this->contacts[$index] = $new_contact;
    // // //    $this->fileHandler->writeFile($this->contacts);
    //    $this->getDatabaseHandler()->updateItem($contact,$id);
    // //    old_contact->getId()
    //     }
            

 ?>
