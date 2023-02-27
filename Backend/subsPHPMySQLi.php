<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQLi</title>
    <script>
        function getSelected() {
            var selectedVal = document.getElementById("plansearch").value;
            var selected = '<?php echo $selectedVal; ?>';
        }
    </script>
    <style>
        .main {
                font-family: Arial, Helvetica, sans-serif;
                background-color: red;
                color: white;
                width: 50%;
                margin-top: 15px;
                margin-left: 30px;
                height: auto;
            }
            .error {
                color: black;
            }
            .title {
                text-align: center;
                padding: 10px;
            }
            .line {
                margin-top: -20px;
                margin-bottom: 15px;
                color: white;
            }
            .label {
                margin-top: 10px;
                margin-left: 20px;
                font-weight: bold;
            }
            input[type=text] {
                margin-top: 10px;
                margin-left: 20px;
                width: 80%;
                border-radius: 7px;
                height: 20px;
            }
            input[type=radio] {
                margin-left: 20px;
                margin-top: 10px;
            }
            input[type=submit] {
                color: white;
                background-color: red;
                border: 2px solid white;
                border-radius: 7px;
                padding: 10px;
                margin: 10px;
            }
            textarea {
                margin-left: 20px;
                width: 80%;
                border-radius: 7px;
                margin-top: 10px;
            }
            .button {
                text-align: center;
            }
            span {
                margin-left: 20px;
                margin-top: 10px;
            }
            table, tr, th, td {
                border: 1px solid black;
            }
            th, tr, td {
                padding: 10px;
            }
    </style>
</head>
<body>
	<div>
        <?php
            $nameErr = $emailErr = $mobileErr = $planErr = $addressErr = "";
            $name = $email = $mobile = $plan = $address = $feedback = $plansearch = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty($_POST["name"])) {
                    $nameErr = "NAME IS REQUIRED";
                }
                else {
                    $name = test_input($_POST["name"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                    }
                }
                if (empty($_POST["email"])) {
                    $emailErr = "EMAIL IS REQUIRED";
                }
                else {
                    $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }
                }
                if (empty($_POST["mobile"])) {
                    $mobileErr = "MOBILE IS REQUIRED";
                  } else {
                    $mobile = test_input($_POST["mobile"]);
                    if (!preg_match("/^[6-9]{1}[0-9]{9}+$/",$mobile)) {
                        $mobileErr = "Invalid mobile number";
                    }
                }
                if (empty($_POST["plan"])) {
                    $planErr = "PLAN IS REQUIRED";
                }
                else {
                    $plan = test_input($_POST["plan"]);
                }
                if (empty($_POST["address"])) {
                    $addressErr = "ADDRESS IS REQUIRED";
                }
                else {
                    $address = test_input($_POST["address"]);
                }
                if (empty($_POST["feedback"])) {
                    $feedback = "";
                }
                else {
                    $feedback = test_input($_POST["feedback"]);
                }
                $plansearch = test_input($_POST["plansearch"]);
            }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
        <div class="main">
            <h2 class="title">Super Fast Internet for Home and Businesses</h2>
            <hr class="line">
            <form method="post" action="add.php">
                <div class="label">Name:</div>
                <input type="text" name="name">
                <br><span class="error">* <?php echo $nameErr;?></span>
                <br>
                <div class="label">E-Mail:</div>
                <input type="text" name="email">
                <br><span class="error">* <?php echo $emailErr;?></span>
                <br>
                <div class="label">Mobile:</div>
                <input type="text" name="mobile">
                <br><span class="error">* <?php echo $mobileErr;?></span>
                <br>
                <div class="label">Selected Plan:</div>
                <input type="radio" name="plan" <?php if (isset($plan) && $plan=="Basic Plan") echo "checked";?> value="Basic Plan">Basic Plan<br>
                <input type="radio" name="plan" <?php if (isset($plan) && $plan=="Entertainment Plan") echo "checked";?> value="Entertainment Plan">Entertainment Plan<br>
                <input type="radio" name="plan" <?php if (isset($plan) && $plan=="Deluxe Plan") echo "checked";?> value="Deluxe Plan">Deluxe Plan<br>
                <span class="error">* <?php echo $planErr;?></span>
                <div class="label" style="margin-top: 15px;">Address:</div>
                <textarea name="address" rows="5" cols="40"></textarea>
                <br><span class="error">* <?php echo $addressErr;?></span>
                <br>
                <div class="label">Feedback:</div>
                <textarea name="feedback" rows="5" cols="40"></textarea>
                <br>
                <div class="button">
                    <input type="submit" name="add" value="Submit">  
                </div>
            </form>
	    </div>
	<br>
	<div>
        <br>
		<table style="margin-left: 30px;">
			<thead>
				<th>NAME</th>
				<th>EMAIL</th>
                <th>MOBILE</th>
                <th>PLAN</th>
				<th>ADDRESS</th>
                <th>FEEDBACK</th>
				<th>OPERATIONS</th>
			</thead>
			<tbody>
				<?php
					include('connection.php');
					$query=mysqli_query($conn,"select * from `ISPCustomer`");
					while($row=mysqli_fetch_array($query)) {
				?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
							<td><?php echo $row['plan']; ?></td>
                            <td><?php echo $row['address']; ?></td>
							<td><?php echo $row['feedback']; ?></td>
							<td>
								<a href="edit.php?name=<?php echo $row['name']; ?>">Edit</a>
								<a href="delete.php?name=<?php echo $row['name']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
        <br>
    </div>
    <br>
    <?php
        $selected="Entertainment Plan";
        $options = array("Basic Plan","Entertainment Plan","Deluxe Plan");
        echo "<select id='plansearch'>";
        foreach($options as $option) {
            if ($selected == $option) {
                echo "<option selected='selected' value='$option'>$option</option>";
            }
            else {
                echo "<option value='$option'>$option</option>";
            }
        }
        echo "</select>";
        echo "<button onclick=getSelected()>Search</button>";
        echo "<br>Customers with selected plan:<br>";
        include('connection.php');
					$query=mysqli_query($conn,"select * from `ISPCustomer` where plan='$selected'");
					while($row=mysqli_fetch_array($query)) {
				?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
							<td><?php echo $row['plan']; ?></td>
                            <td><?php echo $row['address']; ?></td>
							<td><?php echo $row['feedback']; ?></td>
                            <br>
						</tr>
						<?php
					}
    ?>
</body>
</html>
