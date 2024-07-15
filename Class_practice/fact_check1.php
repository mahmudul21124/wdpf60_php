<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factorial Number Check</h1>

    <?php
        if(isset($_POST['submit'])){
            $number = $_POST["num"];
            prime_Check($number);
        }

        function prime_Check($n){
            $fact = 1;

            for($x = $n; $x >= 1; $x--) {
                $fact = $fact * $x;
            }
            echo "The factorial number of $n is <b>$fact</b>";
        }

    ?>
    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter a number"><br>
        <input type="submit" name="submit" value="CHECK">
    </form>
    
</body>
</html>