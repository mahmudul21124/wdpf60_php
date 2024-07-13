<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grade</h1>

    <?php

        if(isset($_REQUEST['submit'])){
            $grade = $_REQUEST["grade"];

            $grade = strtoupper($grade);
            switch($grade){
                case "A":
                    echo "Excellent";
                    break;
                
                case "B":
                    echo "GOOD";
                    break;

                case "C":
                    echo "Fair";
                    break;
                
                default:
                echo "Failure";
            }
        }

    ?>
    <form action="" method="post">
        <input type="text" name="grade" placeholder="Enter grade"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>