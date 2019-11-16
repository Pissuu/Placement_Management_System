<?php
$comp_id=$_POST['c_id'];
$conn=mysqli_connect("localhost","root","","placement_mngmt_syst");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE from company where Company_ID='$comp_id';

if ($conn->query($sql) === TRUE) {
    echo " record created successfully";
}
else {
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