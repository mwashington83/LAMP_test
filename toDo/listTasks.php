<html>
<title>Tasks</title>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>


<body>
    <div id="container">
    <div class="card" style="width: 40rem;">
      <div class="card-header">
        <form action="tasksCreate.php">
          <!-- <span class="input-group-addon"><i class="fa fa-plus"></i></span> -->
            <input class="btn btn-outline-success btn-lg" " type="submit" value="create" />
            
        </div>        
        </form>

        <div class="card-body">
        
<?php
require_once "tasksController.php";
$tasksController = new tasksController();
$all_tasks = $tasksController->getAlltasksController();

echo '<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Is Completed</th>
       </tr>
  </thead>
  <tbody>';

foreach ($all_tasks as $tasks) {

  echo '
    <tr>
      <th scope="row">' .$task->getID() . '</th>
      <td>' . $task->getTitle() . '</td>
      <td>' . $task->getisComplete() . '</td>
      </tr>;
    }
    echo '</tbody>
        </table>';
}

?>
    
    </div>
    </div>
    </div>
</body>
</html>

