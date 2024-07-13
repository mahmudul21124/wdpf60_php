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

    <h1>Prime Check</h1>

    <?php

        if(isset($_REQUEST['submit'])){
            $number = $_REQUEST["value"];
            echo prime_Check($number);
        }

        function prime_Check($number){
            if($number == 0){
                return "<b class='wrong'>$number is not allowed</b>";
            }
            else if($number == 1){
                return "<b class='wrong'>$number is not a prime number</b>";
            }
            else if($number == 2){
                return "<b class='right'>$number is a prime number</b>";
            }
            else{
                for($i = 2; $i < $number; $i++){
                    if($number % $i == 0){
                        return "<b class='wrong'>$number is not a prime number</b>";
                    }
            }
            return "<b class='right'>$number is a prime number</b>";
        }
    }

    ?>
    <form action="" method="post">
        <input type="text" name="value" placeholder="Enter a number"> <br>
        <input type="submit" name="submit" value="Check">
    </form>

</body>
</html>