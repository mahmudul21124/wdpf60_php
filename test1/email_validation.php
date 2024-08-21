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

    <?php
        if(isset($_REQUEST['submit'])){
            $email = $_REQUEST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<b class='wrong'>Not a valid email</b>";
            }
            else{
                echo "<b class='right'>Email is validated</b>";
            }
            
        }

    ?>
    <form method="post">
        <input type="text" name="email" placeholder="Enter email address">
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>