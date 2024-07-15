<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        .wrong{
            color: red;
        }
        .right{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Ans to the qn no.1</h1><hr>

    <h3>Login Form</h3>
    
    <?php
        if(isset($_POST['submit'])){
            $user = $_POST["user"];

            if(!filter_var($user, FILTER_VALIDATE_EMAIL)){
                echo "<b class='wrong'>User name is not correct</b>";
            }
            else{
                echo "<b class='right'>Login sucessful</b>";
            }
        }
    ?>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter user name"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>