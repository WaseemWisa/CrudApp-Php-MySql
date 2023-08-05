<?php
  include 'connect.php';
  if(isset($_GET['delteteid'])){
    $id = $_GET['delteteid'];
    $sql = "delete from crud where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
      header("location:display.php");
    } else {
      die(mysqli_error($con));
    }
  }
?>