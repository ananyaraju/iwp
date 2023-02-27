<?php
    if ((($_FILES["card"]["type"] == "image/gif") || ($_FILES["card"]["type"] == "image/png") || ($_FILES["card"]["type"] == "application/pdf")) && ($_FILES["card"]["size"] < 300000)) {
        if( $_FILES["card"]["error"] > 0) {
            echo "an error has occurred ";
            echo "Error code: " .$_FILES["card"]["error"];
        }
        else {
            move_uploaded_file($_FILES["card"]["tmp_name"], "/" . $_FILES["card"]["name"]);
            echo "<table style='border=1px solid black'><tr><td>Filename: </td>
                <td>" . $_FILES["card"]["name"] . "</td></tr>";
            echo "<tr><td>File Type: </td>
                <td>" . $_FILES["card"]["type"] . "</td></tr>";
            echo "<tr><td>File size: </td>
                <td>" . $_FILES["card"]["size"] . "</td></tr>";
            echo "<tr><td>Name of temporary file: </td>
                <td>" . $_FILES["card"]["tmp_name"] . "</td></tr>";
            echo "</table>";
        }
    }
    else {
        echo "file must be either gif or png or pdf with size less than 300kb";
    }
?>