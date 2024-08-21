<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td,tr{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $result = array("Mohiuddin"=>82, "Saif"=>72, "Jamil"=>88, "Abdullah"=>90, "Rummana"=>70);
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Result</th>
        </tr>
        <?php
            foreach($result as $name => $score){
                echo "<tr><td>$name</td><td>$score</td></tr>";
            }
        ?>
        <tr>
            <td colspan="2">
                <?php
                    $maxscore = max($result);
                    $student = array_search($maxscore, $result);
                    echo "Maximum score $score obtained by $student";
                ?>
            </td>
        </tr>
    </table>
    
</body>
</html>