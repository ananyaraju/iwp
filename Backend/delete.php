<?php
	$name=$_GET['name'];
	include('connection.php');
	mysqli_query($conn,"delete from `ISPCustomer` where name='$name'");
	header('location:subsPHPMySQLi.php');
?>