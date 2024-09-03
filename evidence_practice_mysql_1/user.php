<?php $online = new mysqli("localhost", "root", "", "evidence2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        .a{
            color: red;
        }
        .b{
            color: green;
        }
    </style>
</head>
<body>
    <h2>Ans to the no.5</h2>
    <h3>User Login</h3>

    <?php 
        if(isset($_POST['submit'])){
            extract($_POST);

            $data = $online->query("SELECT * FROM user WHERE email='$email' AND password = '$pass'");

            if($data->num_rows == 0){
                echo "<b class='a'>User is not valid</b>";
            }
            else{
                echo "<b class='b'>User is valid</b>";
            }
        }
    ?>
    <form action="" method="post">
        <fieldset style="width: fit-content;">
            <legend>User login</legend>
        <input type="text" name="email" placeholder="Enter email address"><br>
        <input type="text" name="pass" placeholder="Enter password"><br>
        <input type="submit" name="submit" value="LOGIN">
        </fieldset>
    </form>
    
</body>
</html>