<?php
$comp1_id=$_POST['comp_id'];
$str1= preg_replace('/\D/', '', $comp1_id);
$conn=mysqli_connect("localhost","root","","placement_mngmt_syst");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE from company where company.Company_ID='".$str1."'";

if ($conn->query($sql) === TRUE) {
    echo "New record '".$matches."'created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
<script type="text/javascript">
window.alert("successfull registration");
window.location="company.php";
</script>
</html>
