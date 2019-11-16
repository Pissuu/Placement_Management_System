<?php
$company=$_POST['comp_name'];
$Date=$_POST['dte'];
$CTC=$_POST['ctc'];
$Job=$_POST['jd'];
$conn=mysqli_connect("localhost","root","","placement_mngmt_syst");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "insert into company(Company_name,Date,CTC,Job_description) values('".$company."','".$Date."','".$CTC."','".$Job."')";

if ($conn->query($sql) === TRUE) {
    echo "deleted '".$user_name."' successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
<script type="text/javascript">
window.alert("successfull added");
window.location="company.php";
</script>
</html>
