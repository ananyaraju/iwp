<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
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
        </style>
    </head>
    <body>
        <?php
            $nameErr = $emailErr = $mobileErr = $planErr = $addressErr = "";
            $name = $email = $mobile = $plan = $address = $feedback = "";
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
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="label">Name:</div>
                <input type="text" name="name" value="<?php echo $name;?>">
                <br><span class="error">* <?php echo $nameErr;?></span>
                <br>
                <div class="label">E-Mail:</div>
                <input type="text" name="email" value="<?php echo $email;?>">
                <br><span class="error">* <?php echo $emailErr;?></span>
                <br>
                <div class="label">Mobile:</div>
                <input type="text" name="mobile" value="<?php echo $mobile;?>">
                <br><span class="error">* <?php echo $mobileErr;?></span>
                <br>
                <div class="label">Selected Plan:</div>
                <input type="radio" name="plan" <?php if (isset($plan) && $plan=="Basic Plan") echo "checked";?> value="Basic Plan">Basic Plan<br>
                <input type="radio" name="plan" <?php if (isset($plan) && $plan=="Entertainment Plan") echo "checked";?> value="Entertainment Plan">Entertainment Plan<br>
                <input type="radio" name="plan" <?php if (isset($plan) && $plan=="Deluxe Plan") echo "checked";?> value="Deluxe Plan">Deluxe Plan<br>
                <br><span class="error">* <?php echo $planErr;?></span>
                <div class="label" style="margin-top: 15px;">Address:</div>
                <textarea name="address" rows="5" cols="40"><?php echo $address;?></textarea>
                <br><span class="error">* <?php echo $addressErr;?></span>
                <br>
                <div class="label">Feedback:</div>
                <textarea name="feedback" rows="5" cols="40"><?php echo $feedback;?></textarea>
                <br>
                <div class="button">
                    <input type="submit" name="submit" value="Submit">  
                </div>
            </form>
        </div>
        <?php
            echo "<br><h2>Your details:</h2>";
            echo "Name: ".$name;
            echo "<br>";
            echo "E-Mail: ".$email;
            echo "<br>";
            echo "Mobile: ".$mobile;
            echo "<br>";
            echo "Plan: ".$plan;
            echo "<br>";
            echo "Address: ".$address;
            echo "<br>";
            echo "Feedback: ".$feedback;
        ?>
    </body>
</html>