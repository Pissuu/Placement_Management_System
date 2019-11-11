<?php
$user_id=$_POST['user_id'];
$comp_id=$_POST['company'];
$conn=mysqli_connect("localhost","root","","placement_mngmt_syst");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into registered (User_ID,Company_ID) VALUES ('".$user_id."','".$comp_id."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
<script type="text/javascript">
	window.alert("successfull registration");
window.location="coe.php";
</script>
</html>
