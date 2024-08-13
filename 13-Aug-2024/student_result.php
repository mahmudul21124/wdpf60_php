<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Sheet</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, tr, td{
            border: 1px solid;
        }
    </style>
</head>
<body>

    <?php

        $results = ["Saif" => 50, "Nazrul" => 42, "Rummana" => 49, "Tanim" => 41];

    ?>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Obtained Score</th>
        </tr>
        <?php
            foreach($results as $name => $score){
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$score</td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td colspan="2">
                <?php $maxscore = max($results);
                    $student = array_search($maxscore, $results);
                    echo "Maximum score $maxscore obtained by $student";
                    ?>
            </td>
        </tr>
    </table>
    
</body>
</html>