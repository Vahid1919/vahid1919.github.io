<?php

$first_entrance = false;



if($first_entrance){
    $new_task = filter_input(INPUT_POST, "new_task");

if($new_task == null){
  $err_msg = "No Input Recorded";
  include('db_error.php');
}else if(preg_match("!/[a-zA-Z]{3, 50}$/!", $new_task)){
  $err_msg = "Invalid New Task";
  include('db_error.php');
}else{
  require_once("dbconnect.php");
  $input_query = "INSERT INTO tasks(user_id, task_name, task_status) VALUES (1, :new_task, 'active')";
  $insert_task = $db->prepare($input_query);
  $insert_task->bindValue(":new_task", $new_task);

  $success = $insert_task->execute();

  if(!$success){
    $err_msg = $insert_task->errorInfo()[2];
    include('db_error.php');
  }

}
}


require_once("dbconnect.php");
$task_query = "SELECT * FROM tasks WHERE user_id = 1 AND task_status = 'active'";
$task_statement = $db->prepare($task_query);
$task_statement->execute();
$active_tasks = $task_statement->fetchAll();

$task_statement->closeCursor();



$current_task = 1;
$first_entrance = true;




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">

  <!-- Stylesheet Link -->
  <link rel="stylesheet" type="text/css" href="./css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <title>Widmo Dashboard</title>
</head>

<body>

<!-- Navbar -->
  <div class="container">
    <div class="nav-title">
      <h2>Options</h2>
    </div>
    <div class="container-item" style="order: 1; margin-top: 10vh"><svg id="icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <div class="nav-text">Team</div>
    </div>
    <div class="container-item" style="order: 2"><svg id="icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
      </svg>
      <div class="nav-text">Completed</div>
    </div>
    <div class="container-item" style="order: 3;"><svg id="icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg>
      <div class="nav-text">Settings</div>
    </div>
    <div class="container-item" style="order: 4; margin-top: auto;"><svg id="icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
      </svg>
      <div class="nav-text">Logout</div>
    </div>
  </div>

  <div class="non-nav">
    <img id="top-image" src="./img/36914.jpg">

    <div class="non-image">


      <form id="form-flex" action="POST" target="dashboard.php">

        <input type="text" id="task-input" name="new_task" placeholder="add new task">

        <button type="submit" id="task-submit">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
          </svg>
        </button>

      </form>



      <br>
      <br>


      
      <div id="active-tasks">
      <?php foreach($active_tasks as $task): ?>

      
        <div class="task-container">
          <!-- this -->
          <input type="checkbox" class="check-box task-item" id="task-<?php echo $current_task;?>">
          <label for="task-<?php echo $current_task;$current_task+=1;?>" class="task-item task-text" style="order: 1"> <span class="actual-text"><?php echo $task["task_name"]; 
                                                                                                      ?></span></label>

        </div>

      


      <?php endforeach;?>
      </div>

      <br>
      <br>









    </div>

  </div>





</body>

</html>