<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ans to the qn no.2</h1><hr>
    <h3>Students associative array</h3>

    <?php

        $students = [
            "Saif" => "Puran Dhaka",
            "Jamil" => "Sahjahanpur",
            "Nazrul" => "Demra",
            "Rummana" => "Narayanganj",
            "Rakib" => "Siddirganj"
        ];

        echo "<pre>";
        // print_r($students);
        echo "<h5> Before sorting</h5>";

        echo "<ol>";
        foreach ($students as $student => $district) {
            echo  "<li>$student: $district</li>";
        }
        echo "</ol>";
        echo "<hr>";

        ksort($students);
        // print_r($students);
        echo "<h5> After sorting</h5>";
        
        echo "<ol>";
        foreach ($students as $student => $district) {
            echo  "<li>$student: $district</li>";
        }
        echo "</ol>";

    ?>
    
</body>
</html>