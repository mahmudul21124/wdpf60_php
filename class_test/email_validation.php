<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            $mail = $_POST["email"];
            $pass = $_POST["pass"];

            if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                echo "<b class='wrong'>Email address is not valid</b>";
            }
            else if(strlen($pass) < 6){
            echo "<b class='wrong'>Password must be 6 character long</b>";
            } 
            else{
            echo "<b class='right'>Login Sucessful</b>";
            }
    }

    ?>

    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter email"><br>
        <input type="text" name="pass" placeholder="Enter password"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>