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
    <h2>Ans to the qn no.3</h2>
    <h3>Maximum Score Find Out</h3>
    <?php
        $result = [
            "Saif" => 80,
            "Jamil" => 78,
            "Mohiuddin" => 92,
            "Rummana" => 88,
            "Rakib" => 60
        ];
    ?>
    <table>
        <tr>
            <th>Students Name</th>
            <th>Score</th>
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
                    echo "Maximum score $maxscore obtained by $student";
                ?>
            </td>
        </tr>
    </table>
</body>
</html>