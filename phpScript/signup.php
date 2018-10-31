<?php

if (isset($_POST['signup'])) {
  // code...

  include_once '../phpScript/db.php';


  $hobbie = $_POST['hobbie'];
  $dob = $_POST['dob'];
  $uname = $_POST['Username'];
  $email  = $_POST['email'];
  $password = $_POST['password'];
  $conpassword = $_POST['password1'];

    if ($password != $conpassword) {
      // code...
      echo "password doesnot match";
    }

    else {
      if ($password != $conpassword) {
        // code...
      }
      $sql = "INSERT INTO users (hobbie, dob, username, email, password) VALUES ('$hobbie', '$dob', '$uname', '$email', '$password');";
      $query = mysqli_query($con, $sql);
      header("location: ../index.php");
    }

}
 ?>
