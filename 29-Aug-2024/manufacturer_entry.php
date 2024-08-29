<?php $online = new mysqli("localhost", "root", "", "tclk60"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Entry</title>
    <style>
        .a{
            color: green;
        }
        .b{
            color: red;
        }
    </style>
</head>
<body>
    <h2>Ans to the qn no.2</h2><hr>
    <h3>Manufacturer Entry</h3>

    <?php
        if(isset($_POST['submit'])){
            extract($_POST);
            if($online->query("CALL add_manufacturer('$name', '$add', '$con')")){
                echo "<b class='a'>Successfully added</b>";
            }else{
                echo "<b class='b'>Failed to add</b>";
            }
        }

    ?>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter manufacturer name"><br>
        <textarea name="add" id="" placeholder="Enter address"></textarea><br>
        <input type="text" name="con" placeholder="Enter contact number"><br>
        <input type="submit" name="submit" value="SUBMIT">

    </form>
    <br>
    <a href="manufacturer.php">Manufacturer List</a>
    
</body>
</html>