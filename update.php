<?php
  include 'connect.php';
  $id = $_GET['updateid'];
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $passord = $_POST['password'];
    $mobile = $_POST['mobile'];
    $sql = "UPDATE crud SET id=$id, name='$name' , email='$email',  passkey='$passord', mobile='$mobile'
    WHERE id=$id
    ";
    $result = mysqli_query($con , $sql);
    if ($result) {
      header("location:display.php");
    } else {
      die(mysqli_error($con));
    }
  }
  mysqli_close($con);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="./bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form method="post">
      <div class="mb-3">
          <label class="form-label">New Name</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label  class="form-label">New Email</label>
          <input type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
          <label class="form-label">New Password</label>
          <input type="text" class="form-control" name="password">
        </div>
        <div class="mb-3">
          <label class="form-label">New Phone Number</label>
          <input type="text" class="form-control" name="mobile">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>