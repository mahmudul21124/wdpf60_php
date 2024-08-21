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
            $number = $_REQUEST['num'];
            echo primeCheck($number);
        }
        
        function primeCheck($n){
            if($n == 0){
                return "<b class= 'wrong'>$n is not allowed</b>";
            }
            else if($n == 1){
                return "<b class= 'wrong'>$n is not a prime number</b>";
            }
            else if($n == 2){
                return "<b class= 'right'>$n is a prime number</b>";
            }
            else{
                for($i=2; $n>$i;$i++){
                    if($n % $i == 0){
                        return "<b class= 'wrong'>$n is not a prime number</b>";
                    }
                }
                return "<b class= 'right'>$n is a prime number</b>";
            }

        }

    ?>

    <form method="post">
        <input type="text" name="num" placeholder="Enter a number">
        <input type="submit" name="submit" value="CHECK">
    </form>
    
</body>
</html>