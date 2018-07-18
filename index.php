<?php
$action = isset($_GET['a']) ? $_GET['a'] : "";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PTTES</title>

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <form class="form-signin" method="post" action="check.php">
      <?php
  if($action == 'fail'){
      echo "<div class=\"alert alert-danger\">Please enter the correct id.</div>";
  }
  if($action == 'add'){
      echo "<div class=\"alert alert-success\">Check-in Success</div>";
  }
  ?>
      <a href="index.php"><img class="mb-4" src="img/pttes.png" alt="" ></a>
      <h1 class="h3 mb-3 font-weight-normal">Check In</h1>
      <label for="inputEmail" class="sr-only">ID</label>
      <input type="number" name="ID" class="form-control" placeholder="Please Enter ID" required autofocus>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Check In</button>
      <p class="mt-5 mb-3 text-muted">&copy; PTTES 2018</p>
    </form>
  </body>
</html>
