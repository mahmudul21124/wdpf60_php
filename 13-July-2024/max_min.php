<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Max Min Check</h1>

    <?php
        if(isset($_POST['submit'])){
            $numbers = $_POST["num"];

            $numarray = explode(",", $numbers);
            // print_r($numarray);

            $max = $numarray[0];
            $min = $numarray[0];

            for($i = 0; $i < count($numarray); $i++){
                if($numarray[$i] > $max){
                    $max = $numarray[$i];
                }
            
                if($numarray[$i] < $min){
                        $min = $numarray[$i];
                }
            }
            echo "The max number from $numbers is <b>$max</b> <br> The min number from $numbers is <b>$min</b>";
                    
        }
    
    


    ?>
    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter numbers"><br>
        <input type="submit" name="submit" value="Check">
    </form>

</body>
</html>