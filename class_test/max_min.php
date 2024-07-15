<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ans to the qn no.4</h1>
    <h3>Max Min Check</h3>

    <?php
        if(isset($_POST["submit"])){
            $numbers = $_POST["num"];
            $numarray = explode(",", $numbers);

            $max = $numarray[0];
            $min = $numarray[0];

            for($x=0; $x<count($numarray); $x++){   
                if($numarray[$x] < $min){
                    $min = $numarray[$x];
                }
                if($numarray[$x] > $max){
                    $max = $numarray[$x];
                }
            }
            echo "The maximum numbers from $numbers is <b>$max</b><br>The minimum numbers from $numbers is <b>$min</b>";
        }
    ?>
    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter numbers"><br>
        <input type="submit" name="submit" value="CHECK">
    </form>
    
</body>
</html>