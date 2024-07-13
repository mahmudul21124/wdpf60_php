<!DOCTYPE html>
<html>
    <head>
        <title>Email Validation</title>
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
                $email = $_POST["email"];
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "<b class='wrong'>Not a valid email</b>";
                }
                else{
                    echo "<b class='right'>Email is validated</b>";
                }
                
            }

        ?>

        <form method="post">
            <input type="text" name="email" placeholder="Enter email"> <br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>