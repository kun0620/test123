<?php
require 'connect.php';
$to=$_POST['ID'];
$meSql = "SELECT * FROM pttes2 where tomerID = $to ";
$meQuery = mysqli_query($con,$meSql);
while ($meResult = mysqli_fetch_assoc($meQuery))
{
$name=$meResult['Name'];
}




$sql = "INSERT INTO `view` (`No`, `tomerID`, `Name`, `Time`, `Event`)
VALUES (NULL, '$to', '$name', CURRENT_TIMESTAMP, '')" ;

  if ($name!="") {
    mysqli_query($con,$sql);
       header('location:index.php?a=add');

} else {
  header('location:index.php?a=fail');
}



?>
