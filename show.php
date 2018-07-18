<?php
require "connect.php";
$meSql = "SELECT * FROM view";
$meQuery = mysqli_query($con,$meSql);
 ?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <title>Edit Data</title>
  </head>

<body>
  <nav class="navbar fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Regiter</a>
  </nav>

  <br>
  <br>
  <br>
  <table class="table table-striped">
                  <thead>
                      <tr>
                          <th scope="col">tomerID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Time</th>

                          <th scope="col">Event</th>

                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      while ($meResult = mysqli_fetch_assoc($meQuery))
                      {
                          ?>
                          <tr >

                              <th scope="row"><?php echo $meResult['tomerID']; ?></td>
                              <td><?php echo $meResult['Name']; ?></td>
                              <td><?php echo $meResult['Time']; ?></td>

                              <td><?php echo $meResult['Event']; ?></td>
                          </tr>
                          <?php
                      }
                      ?>
                  </tbody>
              </table>
              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
