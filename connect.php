<?php
  $con = new mysqli("localhost:3306", "root","", "cruddb");
  if (!$con) {
    die(mysqli_error($con));
  }
  
?>