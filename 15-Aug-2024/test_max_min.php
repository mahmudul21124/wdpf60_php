<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Max & Min number find out</h1>

    <?php
        if(isset($_REQUEST['submit'])){
            maxMinCheck();
        }

        function maxMinCheck(){
            $numbers = $_REQUEST['value'];
            $numarray = explode(",", $numbers);

            $max = $numarray[0];
            $min = $numarray[0];

            for($x=0; $x<count($numarray);$x++){
                if($numarray[$x]<$min){
                    $min = $numarray[$x];
                }
                if($numarray[$x]>$max){
                    $max = $numarray[$x];
                }
            }
            echo "The maximum number from $numbers is <b>$max</b> <br> The minimum number from $numbers is <b>$min</b>";
        }


    ?>

    <form method="post">
        <input type="text" name="value" placeholder="Enter any five number"><br>
        <input type="submit" name="submit" value="FIND OUT">
    </form>
    
</body>
</html>