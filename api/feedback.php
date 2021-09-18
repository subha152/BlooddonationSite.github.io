<?php
include_once("../connection.php");

$name= mysqli_real_escape_string($con, $_GET['name']);
$email= mysqli_real_escape_string($con, $_GET['email']);
$phone= mysqli_real_escape_string($con, $_GET['phone']);
$message= mysqli_real_escape_string($con, $_GET['message']);

$sql="INSERT INTO feedback (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";
$query=mysqli_query($con, $sql);
?>