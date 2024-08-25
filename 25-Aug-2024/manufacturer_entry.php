<?php $mysqli = new mysqli("localhost", "root", "", "evidence"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>New Mnufacturer</h3>

    <?php
        if(isset($_POST['submit'])){
            extract($_POST);

            $mysqli->query("CALL add_manufacturer('$name', '$address', '$contact')");

        }

    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Manufacturer name"><br>
        <textarea name="address" placeholder="Enter address"></textarea><br>
        <input type="text" name="contact" placeholder="Enter contact number"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    <br>
    <a href="manufacturer.php">All Manufacturers</a>
    
</body>
</html>