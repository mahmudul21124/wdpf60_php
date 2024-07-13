<!DOCTYPE html>
<html>
    <head>
        <title>Grading System</title>
        
    </head>
    <body>
        <h1>Grading System</h1>

        <?php

            if(isset($_POST['submit'])){
                $grade = $_POST["grade"];

                $grade = strtoupper($grade);

                switch($grade){
                    case "A":
                        echo "Excellent";
                        break;
                    
                    case "B":
                        echo "Good";
                        break;
                    
                    case "C":
                        echo "Fair";
                        break;

                    case "D":
                        echo "Poor";
                        break;
                    default:
                    echo "Fail";
                
                
                }
            }

        ?>

        <form method="post">
            <input type="text" name="grade" placeholder="Enter grade letter"> <br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>