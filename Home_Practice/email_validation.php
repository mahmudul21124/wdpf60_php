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
    <h1>Email Validation</h1>

    <?php

        if(isset($_POST['submit'])){
            $mail = $_POST["email"];
            if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                echo "<p class='wrong'>Email address is not valid</p>";
            }
            else{
                echo "<p class='right'>Email address is valid</p>";
            }
        }


    ?>
    
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter email"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>