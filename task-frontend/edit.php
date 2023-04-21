<?php  

  // Validate ID

  if(!isset($_GET['id'])) header("location: ./");


  // Include Files

  include $_SERVER['DOCUMENT_ROOT'] . '/app/core/fetchAPI/fetchAPI.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/utils/helpers/successManage.php';

  $fetchAPITask = new fetchAPI();

  // Alerts Response

  $successManage = null;


  // Get Task Data

  $fetchAPITask->getTask($_GET['id']);

  $fetchTask = $fetchAPITask->getTask;


  // Complete Task

  if(isset($_POST['editTask'])) {

    $fetchAPITask->editTask($_POST['task'], $_POST['priority'], $_POST['tag'], $_POST['description'], $_GET['id']);

    $fetchCreateTask = $fetchAPITask->editTask;

    header("Refresh:3");

    $successManage = $fetchCreateTask['response'];
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
       <h1>Edit Task</h1>
       <form class="row g-3" action="#" method="POST">
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Task</label>
            <input type="text" class="form-control" id="inputEmail4" value="<?php echo $fetchTask[0]['taskName'] ?>" name="task">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Priority</label>
            <select id="inputState" name="priority" class="form-select">
              <option selected>High</option>
              <option>Medium</option>
              <option>Normal</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Tag</label>
            <select id="inputState" name="tag" class="form-select">
              <option selected>Development</option>
              <option>Personal</option>
              <option>Work</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" value="test" id="exampleFormControlTextarea1" rows="3"><?php echo $fetchTask[0]['description'] ?></textarea>
          </div>
          <div class="col-12">
            <button type="submit" name="editTask" class="btn btn-primary">Edit Task</button>
          </div>
        </form>
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
