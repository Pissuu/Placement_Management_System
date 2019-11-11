<?php
$user_id=$_POST['user_id'];
$branch_id=$_POST['branch_id'];
$st_ph_no=$_POST['st_ph_no'];
$st_10th=$_POST['st_10th'];
$st_12th=$_POST['st_12th'];
$st_cgpa=$_POST['12_cgpa'];
$backlogs=$_POST['backlogs'];
$conn=mysqli_connect("localhost","root","","placement_mngmt_syst");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "insert into student(user_id,branch_id,st_ph_no,st_10th,st_12th,st_cgpa,backlogs) values('".$user_id."','".$branch_id."','".$st_ph_no."','".$st_10th."','".$st_12th."','".$st_cgpa."','".$backlogs."')";

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
window.location="student.php";
</script>
</html>
