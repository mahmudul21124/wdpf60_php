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

        if(isset($_POST['submit'])){
            $grade = $_POST["grade"];
            $grade = strtoupper($grade);

            if($grade == "A"){
                echo "Excellent";
        }
        else if($grade == "B"){
            echo "Good";
        }
        else if($grade == "C"){
                echo "Fair";
        }
        else{
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