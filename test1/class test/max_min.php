<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if(isset($_REQUEST['submit'])){
            $numbers = $_REQUEST['num'];
            $numarray = explode(",", $numbers);

            $max = $numarray[0];
            $min = $numarray[0];

            for($i=0; $i<count($numarray); $i++){
                if($numarray[$i]>$max){
                    $max = $numarray[$i];
                }
                if($numarray[$i]<$min){
                    $min = $numarray[$i];
                }
            }
            echo "Maximum numbers from $numbers is <b>$max</b><br> Minimum numbers from $numbers is <b>$min</b> ";
        
           
        }

    ?>
    <form method="post">
        <input type="text" name="num" placeholder="Enter numbers"><br>
        <input type="submit" name="submit" value="CHECK">
    </form>
    
</body>
</html>