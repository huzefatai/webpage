<?php
session_start();
if (isset($_SESSION['email'])) {
  // code...
}
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Profile | <?php echo $_SESSION['username']; ?></title>
  <style media="screen">

  </style>
</head>
<body>

<a href="profile/profile.php">
     <?php echo $_SESSION['username']; ?>
</a>

<p>DOB: <?php echo $_SESSION['dob']; ?></p>
<p>Hobbie: <?php echo $_SESSION['hobbie']; ?></p>
<p>Email: <?php echo $_SESSION['email']; ?></p>
<p style="
  padding: 20px;
  background-color: #71689e;
  color:#fff;
  width: 115px;
"><a href="phpScript/logout.php" style="
width: auto;
font-size: 18px;
margin: 0;
">End Session</a></p>
</body>
</html>
