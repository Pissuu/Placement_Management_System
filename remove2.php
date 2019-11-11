?>
<?php
$user_id=$_POST['user_name'];
$comp_id=$_POST['company'];
$conn=mysqli_connect("localhost","root","","placement_mngmt_syst");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "delete from registered where registered.User_ID='".$user_id."'";

if ($conn->query($sql) === TRUE) {
    echo "deleted '".$user_name."' successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
<script type="text/javascript">
window.alert("successfull removed");
window.location="Registered.php";
</script>
</html>
