<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Factorial check</h2>
    
    <?php

        if(isset($_REQUEST['submit'])){
            $number = $_REQUEST['value'];
            factCheck($number);
        }

        function factCheck($number){
            $fact = 1;

            for($i= $number; $i>=1; $i--){
                $fact = $fact * $i;
            }
            echo "The factorial number of $number is <b>$fact</b>";
        }

    ?>
    <form method="post">
        <input type="text" name="value" placeholder="Enter a number"><br>
        <input type="submit" name="submit" value="Check">
    </form>
    
</body>
</html>