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
    <h1>Ans to the qn no.5</h1>
    <h3>Prime number check</h3>


    <?php
        if(isset($_POST['submit'])){
            $number = $_POST["num"];
            echo PrimeCheck($number);
        }

        function PrimeCheck($n){
            if($n == 0){
                return "<b class='wrong'>$n is not allowed.</b>";
            }
            else if($n == 1){
                return "<b class='wrong'>$n is not a prime number.</b>";
            }
            else if($n == 2){
                return "<b class='right'>$n is a prime number.</b>";
            }
            else{
                for($i = 2; $i<$n ; $i++){
                    if($n % $i == 0){
                        return "<b class='wrong'>$n is not a prime number.</b>";
                    }
                }
                return "<b class='right'>$n is a prime number.</b>";
            }
        }
    ?>
    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter a number"><br>
        <input type="submit" name="submit" value="CHECK">
    </form>
    
</body>
</html>