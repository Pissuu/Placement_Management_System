
<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="icon" type="image/png" href="/images/favicon.png">

    <script src="/js/main_script.js"></script>
    <!--BootStrap Scripts-->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Placement Management System</title>
  </head>
  <body>
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
                      echo " <a href='coe.php' class='btn btn-success' style='width:50%;margin:auto'><h4>Continue</h4></a>";
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
