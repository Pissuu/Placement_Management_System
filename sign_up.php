<?php
session_start();
?>
<!-- abhishek -->
<!doctype html>
<html lang="en">
  <head>
    <title>Placement Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body style="background-image: url(images/success.jpg);">
    <div class="container">
      <div class="container" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
        <div class="row">
          <?php

              error_reporting(E_ERROR | E_PARSE);

              require_once 'includes/dbconnect.php';
              $us=$_POST["usn"];
              $userName = $_POST["userName"];
              $userPassword = $_POST["password"];
              $userEmail = $_POST["userEmail"];

                  $SQL_QUERY = "INSERT INTO user (USER_ID, USER_NAME, USER_EMAIL, USER_PASSWORD) VALUES( '".$us."','".$userName."','".$userEmail."','".$userPassword."')";

                  if ( mysqli_query($CONN, $SQL_QUERY)) {
                       echo " <h2> Sign Up Successful </h2>";
                      $_SESSION["userName"] = $userName;
                      echo " <a href='coe.php' class='btn btn-danger' style='width:50%;margin:auto'><h4>Continue</h4></a>";
                  }
                  else {
                      echo "Error: " . $SQL_QUERY . "<br>" . mysqli_error($CONN);
                      echo " <a href='./signup.html' class='btn btn-danger' style='width:50%;margin:auto'><h4>Retry</h4></a> ";
                  }

              mysqli_close($CONN);
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
