<?php
$company=$_POST['comp_name'];
$cmp_id=$_POST['company_id'];
$Date=$_POST['dte'];
$CTC=$_POST['ctc'];
$Job=$_POST['jd'];
$conn=mysqli_connect("localhost","root","","placement_mngmt_syst");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "insert into company(Company_ID,Company_name,Date,CTC,Job_description) values('".$cmp_id."','".$company."','".$Date."','".$CTC."','".$Job."')";

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
