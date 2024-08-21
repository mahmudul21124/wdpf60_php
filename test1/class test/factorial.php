<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ans to the qn no.2</h2>
    <h3>Factorial check</h3>

    <?php
        if(isset($_REQUEST['submit'])){
            $number = $_REQUEST['num'];
            factCheck($number);
        }

        function factCheck($n){
            
            $fact = 1;
            for($i=$n; $i>=1;$i--){
                $fact = $fact * $i;
            }
            echo "The factorial number of $n is <b>$fact</b>";
        }

    ?>
    <form method="post">
        <input type="text" name="num" placeholder="Enter a number"><br>
        <input type="submit" name="submit" value="CHECK">
    </form>
    
</body>
</html>