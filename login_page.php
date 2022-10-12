<?php
$con = mysqli_connect('localhost', 'root', '','Pesticide');

// get the post records
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$sql = "INSERT INTO `user_details` (`Username`, `Password`) VALUES ('0', '$Username', '$Password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>