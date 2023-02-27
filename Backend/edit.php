<?php
	include('connection.php');
	$name=$_GET['name'];
	$query=mysqli_query($conn,"select * from `ISPCustomer` where name='$name'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Details</title>
</head>
<body>
	<h2>Edit Customer Details</h2>
	<form method="post" action="update.php?name=<?php echo $name; ?>">
		Name:<input type="text" value="<?php echo $row['name']; ?>" name="name"><br><br>
		E-mail:<input type="text" value="<?php echo $row['email']; ?>" name="email"><br><br>
        Mobile:<input type="text" value="<?php echo $row['mobile']; ?>" name="mobile"><br><br>
		Plan:<br>
            <input type="radio" name="plan" <?php if (isset($plan) && $plan=="Basic Plan") echo "checked";?> value="Basic Plan">Basic Plan<br>
            <input type="radio" name="plan" <?php if (isset($plan) && $plan=="Entertainment Plan") echo "checked";?> value="Entertainment Plan">Entertainment Plan<br>
            <input type="radio" name="plan" <?php if (isset($plan) && $plan=="Deluxe Plan") echo "checked";?> value="Deluxe Plan">Deluxe Plan<br>
        <br>
        Address:<input type="text" value="<?php echo $row['address']; ?>" name="address"><br><br>
		Feedback:<input type="text" value="<?php echo $row['feedback']; ?>" name="feedback"><br><br>
		<input type="submit" name="submit" value="Update">
		<a href="subsPHPMySQLi.php">Back</a>
	</form>
</body>
</html>