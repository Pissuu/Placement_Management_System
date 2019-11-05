<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Student List</h2>
                </div>
                <div class="card-body">
                <form method="POST" action="remove1.php">
                <table class="col-sm-12" style="width:100%">
      <tr>
          <th>Student Name</th>
          <th>Branch</th>
      </tr>
  
<?php
require_once 'includes/dbconnect.php';
$sql="select * from Student ";
$result=$CONN-> query($sql);
if($result > 0)
{
    while($row=$result-> fetch_assoc())
    {
    echo "<tr><td>".$row[""]."</td><td>".$row[""]."</td><td>".$row[""]."</td></tr>";
    }
    echo "</table>";
}
else
{
echo "0 result";
}
$CONN-> close();
?>
</table>
<div>
                           <p> <button class="btn btn--radius-2 btn--red" type="submit" name="Remove" style="margin-top:100px;">Remove</button></p>
                           
                        </div>
</form>
<form method="POST" action="add.php">
    <div>
    <p> <button class="btn btn--radius-2 btn--red" type="submit" name="Add" style="margin-top:20px;">Add</button></p>
</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->