<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `enquiries`(username,  Email, Phone, Enquiry) VALUES ('".$firstname."','".$email."',".$phone.",'".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo '<script>window.alert("Enquiry Recorded Successfully");</script>';
$mysqli->close();
?>