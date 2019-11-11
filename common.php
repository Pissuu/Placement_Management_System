
<!doctype html>
<html lang="en">
  <head>
<style type="text/css">
  body{
    color: white;
  }
table {
margin: 8px;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
background: #666;
color: white;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
  color:red;
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;

border: 1px solid #DDD;
}
</style>
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

    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="coe.php">Placement Management System</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="coe.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Sign out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
      <!--END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(Images/1830.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">
            <div class="mb-5 element-animate">
      
              <h1>Welcome.</h1>
<?php
$company_name=$_POST['company'];
echo '<font color="green">' . $company_name. '</font><br>';
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "" ;
$mysql_database = "placement_mngmt_syst";
$db = mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database) or die ("could not connect");

echo "<table style='border: solid 1px black;'>";
echo "<tr><th></th></tr>";
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}


try {
    $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_database", $mysql_user, $mysql_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT c.net_worth,c.share_price,c.annual_revenue,a.Company_ID,a.Alumni_id,a.Alumni_name,a.Alumni_email,a.Alumni_phone_no from alumni a,company c where c.company_name='".$company_name."' and c.company_id=a.company_id");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;

    }
    $sql = "SELECT a.image FROM alumni a,company c WHERE c.company_name='".$company_name."' and c.company_id=a.company_id";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"height="150" width="150" / >';
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
</div>

            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
<!--<form action="Register.php" method="post">
    <section class="feature-destination" style="margin-left:350px;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 element-animate ">
            <a href="Register.php" class="img-bg" style="background-image: url('images/register.jpg');">
              <div class="text">
                <p>Register Now</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 element-animate ">
            <a href="companydetails.php" class="img-bg" style="background-image: url('images/Company.jfif');">
              <div class="text">
                <p>Learn more</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
</form>
    <!-- END section -->
   
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="mb-4">About</h3>
            <p class="mb-4"></p>
            <ul class="list-unstyled ">
              <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span class="">BENGALURU</span></li>
              <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span class="">080-23216455</span></li>
              <li class="d-flex"><span class="mr-3"><span class="icon ion-email"></span></span><span class="">ABHI.JAG@GMAIL.COM</span></li>
            </ul>
          </div>
          
          <div class="col-md-3">
            <h3>Connect</h3>
            <p>
              <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
              <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
              <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
            </p>
          </div>
        </div>
    
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/main.js"></script>
    <div>
  </body>
</html>