<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fact check</h1>

    <?php
        if(isset($_POST['submit'])){
            $number = $_POST["num"];
            factCheck($number);
        }

        function factCheck($number){
            $fact = 1;

            for($i= $number; $i>=1; $i--){
                $fact = $i * $fact;
            }
            echo "The factorial number of $number is <b>$fact</b>";
        }

    ?>

    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter a number"><br>
        <input type="submit" name="submit" value="CHECK">
    </form>
    
</body>
</html>