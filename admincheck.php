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
  <body>
    <div class="container">
      <div class="container" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
        <div class="row">
          <?php
              error_reporting(E_ERROR | E_PARSE);
              require_once 'includes/dbconnect.php';

              $email = $_POST["email"];
              $teamPassword = $_POST["password"];

              $loginAction = mysqli_query($CONN, "SELECT * FROM admin WHERE admin_email = '".$email."'");
              if(!$CONN) {
                  die("Connection failed: " . mysqli_connect_error());
              }
              $rows = mysqli_num_rows($loginAction);

              if($rows>0){
                  $row = mysqli_fetch_assoc($loginAction);
                  if( $row['Admin_email']==$email && $row['Admin_password']==$teamPassword ){
                      echo " <h2> Login Successful </h2>";
                      $_SESSION['userID'] = $row['user_id'];
                      $_SESSION['email']=$email;
                      $_SESSION['userName'] = $row['user_name'];
                      echo " <a href='admincompany.php' class='btn btn-danger' style='width:50%;margin:auto'><h4>Continue</h4></a> ";
                  }
                  else{
                      echo " <h2>Incorrect Password</h2>";
                      echo " <a href='./alogin.html' class='btn btn-danger' style='width:50%;margin:auto'><h4>Retry</h4></a> ";
                  }
              }
              else{
                  echo " <h2> User Not Found </h2>";
                  echo " <a href='./alogin.html' class='btn btn-danger' style='width:50%;margin:auto'><h4>Retry</h4></a>";
              }

              mysqli_close($CONN);
          ?>
        </div>
      </div>
    </div>
  </body>
</html>