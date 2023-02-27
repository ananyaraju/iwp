<?php
	include('connection.php');

	$name=$_POST['name'];
	$email=$_POST['email'];
    $mobile=$_POST['mobile'];
	$plan=$_POST['plan'];
    $address=$_POST['address'];
	$feedback=$_POST['feedback'];
 
	mysqli_query($conn,"insert into `ISPCustomer` values ('$name','$email','$mobile','$plan','$address','$feedback')");
	header('location:subsPHPMySQLi.php');
 
?>