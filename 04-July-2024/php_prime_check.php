<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_POST['submit'])){
            // print_r($_POST);
            // echo $_POST['number'];
            $numbers = $_POST['number'];
            echo primeCheck($numbers);
        }

        function primeCheck($num){
            

            if($num==0){
                return $num . " is not allowed";
            }
            else if($num == 1){
                return $num . " is not a prime number";
            }
            else if($num == 2){
                return $num . " is a prime number";
            }
            else {
                for ($i = 2; $i< $num; $i++){
                    if($num % $i == 0){
                        return $num . " is not a prime number";
                    }
                }
                return $num . " is a prime number";
            }
        }

    ?>

    <form action="" method="post">
        <input type="text" name="number">
        <input type="submit" name="submit" value="CHECK">
    </form>
    
</body>
</html>