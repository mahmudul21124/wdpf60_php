<?php $online = new mysqli("localhost", "root", "", "evidence1"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Entry</title>
</head>
<body>
    
    <h2>Ans to the qn.2</h2>
    <h3>Product Entry</h3>
    <?php
        if(isset($_POST['submit'])){
            extract($_POST);

            $result = $online->query("CALL add_manufacturer('$name', '$address', '$contact_no')");

            if($result){
                echo "Successfully Updated";
            }
        }
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Manufacturer Name"><br>
        <input type="text" name="address" placeholder="Enter address"><br>
        <input type="text" name="contact_no" placeholder="Enter Contact number"><br>
        <input type="submit" name="submit" value="ENTRY">
    </form>
    <br>
    <a href=""></a>
    
</body>
</html>