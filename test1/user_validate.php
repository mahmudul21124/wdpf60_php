<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .right{
            color: green;
        }
        .wrong{
            color: red;
        }
    </style>
</head>
<body>

    <?php
        if(isset($_REQUEST['submit'])){
            $user = $_REQUEST['user'];

            $pattern = '/^[A-z0-9]+@[A-z]{4,8}$/';

            if(preg_match($pattern, $user)){
                echo "<b class='right'> Email address is valid</b>";
            }
            else{
                echo "<b class='wrong'> Email address is not valid</b>";
            }
        }

    ?>

    <form method="post">
        <input type="text" name="user" placeholder="Enter user name"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>