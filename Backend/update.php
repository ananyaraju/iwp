<?php
	include('connection.php');
	$name=$_GET['name'];
 
	$name=$_POST['name'];
	$email=$_POST['email'];
    $mobile=$_POST['mobile'];
	$plan=$_POST['plan'];
    $address=$_POST['address'];
	$feedback=$_POST['feedback'];
 
	mysqli_query($conn,"update `ISPCustomer` set name='$name', email='$email', mobile='$mobile', plan='$plan', address='$address', feedback='$feedback' where name='$name'");
	header('location:subsPHPMySQLi.php');
?>