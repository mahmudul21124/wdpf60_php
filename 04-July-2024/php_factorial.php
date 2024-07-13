<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if(isset($_POST['number'])){
            $numbers = $_POST['number'];
            echo factCheck($numbers);
        }

        function factCheck($n){
            $fact = 1;
            for ($i = $n; $i >= 1; $i--){
                $fact = $fact * $i;
            } 
            return "The factorial of " . $n . " is<b> ". $fact ."</b>";
        }
    ?>

    <form action="" method="post">
        <input type="text" name="number">
        <input type="submit" name="submit" value="Check">
    </form>
    
</body>
</html>