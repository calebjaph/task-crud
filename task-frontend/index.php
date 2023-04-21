<?php 


  // Include Files

  include $_SERVER['DOCUMENT_ROOT'] . '/product-frontend/app/core/fetchAPI/fetchAPI.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/product-frontend/utils/helpers/successManage.php';

  $fetchAPITask = new fetchAPI();

  // Get All Articles

  $fetchAPITask->getAllArticles();

  // Alerts Response

  $successManage = null;

  $fetchAllTasks = $fetchAPITask->getAllArticles;

  // Complete Task

  if(isset($_POST['completeTask'])) {

    $fetchAPITask->completeTask($_POST['taskId']);

    $FetchcompleteTask = $fetchAPITask->completeResponse;

    header("Refresh:3");

    $successManage = $FetchcompleteTask['response'];
  }

  if(isset($_POST['deleteTask'])) {

    $fetchAPITask->deleteTask($_POST['taskId']);

    $fetchDeleteTask = $fetchAPITask->deleteTask;

    header("Refresh:3");

    $successManage = $fetchDeleteTask['response'];

  }

?>

<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer/">

    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

        <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <link rel="stylesheet" type="text/css" href="./utils/css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">    

   <?php include("./utils/helpers/nav.php"); ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
      <div class="container py-5 w-75">
        <h1>My Tasks</h1>
        <?php

        if(!$fetchAllTasks) {
          echo '<div class="alert alert-primary" role="alert">
              You dont have any tasks created yet, create your first task.
          </div>';
        }

          for ($i = 0; $i < count($fetchAllTasks); ++$i) {
            if(!$fetchAllTasks[$i]['isDone']) {
              echo '<br><div class="card">
                    <h5 class="card-header">' . $fetchAllTasks[$i]['taskName'] . '  <span class="badge text-bg-primary">' . $fetchAllTasks[$i]['tag'] . ' </span>';

                     switch ($fetchAllTasks[$i]['priority']) {
                      case 'High':
                          echo ' <span class="badge text-bg-danger"><i class="bi bi-flag-fill"></i> ' . $fetchAllTasks[$i]['priority'] . ' </span>';
                        break;

                      case 'Medium':
                        echo ' <span class="badge text-bg-warning text-white"><i class="bi bi-flag-fill"></i> ' . $fetchAllTasks[$i]['priority'] . ' </span>';
                        break;

                      case 'Normal':
                        echo ' <span class="badge text-bg-primary"><i class="bi bi-flag-fill"></i> ' . $fetchAllTasks[$i]['priority'] . ' </span>';
                        break;
                      }

                    echo '</h5>
                    <div class="card-body">
                      <p class="card-text">' . $fetchAllTasks[$i]['description'] . '</p>
                      <p class="card-text"><span class="badge text-bg-warning text-white"> Todo </span></p>
                       <form class="user-form" action="#" method="POST" id="registerForm">
                       <input type="hidden" name="taskId" value="' . $fetchAllTasks[$i]['id'] . '">
                      <button type="submit" name="completeTask"  class="btn btn-success"><i class="bi bi-check"></i> Complete</button> 
                      <a href="edit.php?id=' . $fetchAllTasks[$i]['id'] . '" class="btn btn-warning text-white"><i class="bi bi-pen"></i> Edit</a>
                      <button type="submit" name="deleteTask" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
                      </form>

                    </div>
                  </div>';
            }else {

               echo '<br><div class="card">
                    <h5 class="card-header"><s>' . $fetchAllTasks[$i]['taskName'] . '</s>  <span class="badge text-bg-primary">' . $fetchAllTasks[$i]['tag'] . ' </span> ';


                switch ($fetchAllTasks[$i]['priority']) {
                  case 'High':
                      echo '<span class="badge text-bg-danger"><i class="bi bi-flag-fill"></i> ' . $fetchAllTasks[$i]['priority'] . ' </span>';
                    break;

                  case 'Medium':
                    echo '<span class="badge text-bg-warning text-white"><i class="bi bi-flag-fill"></i> ' . $fetchAllTasks[$i]['priority'] . ' </span>';
                    break;

                  case 'Normal':
                    echo '<span class="badge text-bg-primary"><i class="bi bi-flag-fill"></i> ' . $fetchAllTasks[$i]['priority'] . ' </span>';
                    break;
                }


                echo '</h5>
                      <div class="card-body">
                        <p class="card-text"><s>' . $fetchAllTasks[$i]['description'] . '</s></p>
                        <p class="card-text"><span class="badge text-bg-success text-white"> Done </span></p>
                        <form class="user-form" action="#" method="POST" id="registerForm">
                        <input type="hidden" name="taskId" value="' . $fetchAllTasks[$i]['id'] . '">
                        <button type="submit" name="completeTask"  class="btn btn-success disabled"><i class="bi bi-check"></i> Complete</button> 
                        <a href="edit.php?id=' . $fetchAllTasks[$i]['id'] . '" class="btn btn-warning text-white"><i class="bi bi-pen"></i> Edit</a>
                        <button type="submit" name="deleteTask" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
                      </form>
                    </div>
                  </div>';
            }
          }


        ?>
        
      </div>
    </main>

    <footer class="footer mt-auto py-3 bg-body-tertiary">
      <div class="container">
        <span class="text-body-secondary">Developer Caleb Brown</span>
      </div>
    </footer>

    <?php  

    if(isset($successManage)) {
      successManage($successManage);
    } 

    ?>
  </body>
</html>
