<?php
  session_start();
  if (isset($_SESSION['email'])) {
    // code...
  }

  if (!$_SESSION) {
    // code...
    header("Location: ../index.php");
  }
  ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
   ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Profile |
    huzefa
  </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.toggle').click(function() {
        $('.toggle').toggleClass('active');
        $('.side-bar').toggleClass('active');
      })
    })
  </script>
  <style media="screen">
    html {
      scroll-behavior: smooth;
      width: 100%;
      height: 100%;
    }

    * {
      margin: 0;
      padding: 0;
    }

    body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      font-family: 'Raleway', sans-serif;
      overflow-x: hidden;
    }

    .warpper-1 {
      background-color: #f1c40f;
      width: 1440px;
      box-sizing: border-box;
      box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.1);
    }

    /* header*/
    .header {
      position: fixed;
      background-color: #f1c40f;
      width: 1440px;
      height: 80px;
      box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.1);
      z-index: 10;
    }

    .toggle {
      position: relative;
      top: 25px;
      right: 20px;
      margin-right: 15px;
      transition: 0.5s;
      z-index: 1000;
      float: right;
      cursor: pointer;
    }

    .header .toggle::before {
      content: 'Menu';
      background: transparent;
      font-size: 24px;
      width: 10px;
      padding: 10px;
    }

    .header .toggle.active::before {
      content: 'Close';
      color: #ffffff;
      padding: 10px;
      width: 100px;
      height: 100px;
      scroll: hidden;
    }

    .header .side-bar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background: #c93243;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: .1s;
      opacity: 0;
      visibility: hidden;
      z-index: 1;
    }

    .side-bar.active {
      opacity: 1;
      visibility: visible;
    }

    .side-bar.active {
      visibility: visibile;
      opacity: 1;
    }

    ul {
      position: relative;
      list-style: none;
    }

    ul li {
      text-align: center;
    }

    ul li a {
      text-decoration: none;
      color: #f1f1f1;
      font-size: 48px;
      margin-top: 10px;
      letter-spacing: 5px;
    }

    ul li a:hover {
      text-decoration: underline;
    }

    .full-profile {
      padding: 100px 0 0 0;
      background: #12CE7D;
      width: 1440px;
      height: 689px;
      color: #fff;
    }

    .full-profile .username p {
      font-size: 48px;
      font-family: monospace;
      text-transform: capitalize;
      margin: 0 0 0 20px;
    }

    .full-profile .username .border-staright {
      position: absolute;
      top: 380px;
      border-right: 4px solid #718093;
      border-radius: 5px;
      transform: rotate(0deg);
      margin: -14em 0 0 2em;
      height: 25em;

}

.full-profile .border-slant {
  position: absolute;
  top: 380px;
  border-right: 4px solid #718093;
  border-radius: 5px;
  transform: rotate(90deg);
  margin: -10em 0 0 5.9em;
  height: 8em;

}

.full-profile .email span {
  font-size: 28px;
  position: absolute;
  bottom: 475px;
  left: 180px;
  letter-spacing: 2;
}

.full-profile .email .border-slant {

position: absolute;
  top: 480px;
  border-right: 4px solid #718093;
  border-radius: 5px;
  transform: rotate(90deg);
  margin: -10em 0 0 5.9em;
  height: 8em;
}

.full-profile .dob span {
font-size: 28px;
  position: absolute;
  bottom: 375px;
  left: 175px;
  letter-spacing: 2;
}

.full-profile .hobbie span {
font-size: 28px;
  position: absolute;
  bottom: 280px;
  left: 175px;
  letter-spacing: 2;
  text-transform: capitalize;
}


.full-profile .hobbie .border-slant {

  position: absolute;
  top: 570px;
  border-right: 4px solid #718093;
  border-radius: 5px;
  transform: rotate(90deg);
  margin: -10em 0 0 5.9em;
  height: 8em;
}

.full-profile .password span {
font-size: 33px;
  position: absolute;
  bottom: 200px;
  left: 175px;
  letter-spacing: 2;
  text-transform: capitalize;
}


.full-profile .password .border-slant {

position: absolute;
  top: 650px;
  border-right: 4px solid #718093;
  border-radius: 5px;
  transform: rotate(90deg);
  margin: -10em 0 0 5.9em;
  height: 8em;
}


  </style>
</head>

<body>
  <div class="warpper-1">
    <section class="header">
      <div class="toggle">
      </div>
      <div class="headline">
        <ul>
          <li><a style="font-size: 32px;letter-spacing: 5px; position: absolute;top: 10px;right: 620px;
            " href="../index.php" target="_blank">Huzefa Tai</a></li>
        </ul>
      </div>
      <div class="side-bar">
        <ul>
          <li><a href="../index.php" data-text="Home">Home</a></li>
          <li><a href="../work.html" data-text="Work">Work</a></li>
          <li><a href="../about.html" data-text="About">About</a></li>
        </ul>
      </div>
    </section>
  </div>


  <div class="full-profile">

    <div class="dashboard">

      <div class="username">
        <div class="border-staright"></div>
        <div class="border-slant"></div>
        <p><?php echo $_SESSION['username']; ?></p>
      </div>
      <div class="user-detail">


        <div class="email">

          <div class="border-slant"></div>
            <span><?php echo $_SESSION['email']; ?></span>

    </div>

    <div  class="dob">
      <div class="border-slant"></div>
    <span><?php echo $_SESSION['dob']; ?></span>
    </div>

    <div  class="hobbie">
      <div class="border-slant"></div>
    <span><?php echo $_SESSION['hobbie']; ?></span>
    </div>

    <div  class="password">
      <div class="border-slant"></div>
      <span style="text-transform: none;"><?php echo $_SESSION['password']; ?></span>

    </div>

      </div>
    </div>

  </div>

</body>

</html>
