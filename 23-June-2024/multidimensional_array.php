<?php

    $divisions = [
        "Dhaka" => array(
            "Population" => "10k",
            "Spot" => "Buriganga",
            "Food" => "Singra"
            ),
        "Rahshahi"=> array(
            "Population" => "20k",
            "Spot" => "Ambagan",
            "Food" => "Mango"
            ),
        "Khulna"=> array(
            "Population" => "15k",
            "Spot" => "Sundarban",
            "Food" => "Honey"
            )
        ];

    echo $divisions["Khulna"]["Food"];      // multidimensional array's output.
    echo "<br>";
    echo $divisions["Rahshahi"]["Spot"];
    echo "<hr><pre>";
    print_r ($divisions["Khulna"]);         // associative array's output.
    echo "<hr>";
    print_r ($divisions);                  // associative array's output.


?>