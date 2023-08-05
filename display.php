<?php
  include 'connect.php';
  $sql = "SELECT * FROM crud";
  $result = mysqli_query($con,$sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="./bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
    <button type="button" class="btn btn-primary mt-3 mb-3 "><a href="user.php" class="text-decoration-none text-light">Add New User</a></button>
      <table class="table table-light table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $email = $row['email'];
                  $mobile = $row['mobile'];
                  $password = $row['passkey'];
                  echo ' 
                  <tr>
                        <td scope="row">'.$id.'</td>
                        <td scope="row">'.$name.'</td>
                        <td scope="row">'.$email.'</td>
                        <td scope="row">'.$mobile.'</td>
                        <td scope="row">'.$password.'</td>
                        <td scope="row">
                        <button type="button" class="btn btn-primary me-3 "><a href="update.php?updateid='.$id.'" class="text-light text-decoration-none">Update</a></button>
                        <button type="button" class="btn btn-danger ml-2"><a href="delete.php?delteteid='.$id.'" class="text-light text-decoration-none">Delete</a></button>
                        </td>
                  </tr>
                  ';
                }
              }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>