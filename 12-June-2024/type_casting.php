<?php

    $x = 50;
    $output = (float) $x;
    // $output = (double) $x;

    var_dump($output);
    echo "<br>";
    echo gettype($output);
    echo "<br>";
    echo $x;
    echo "<hr>";

    
    $name = "Rahim";

    $output = (int) $name;

    var_dump($output);
    echo "<br>";
    echo $name;
    echo "<br>";
    echo gettype($output);
    echo "<hr>";

    
    $number = 50.45;

    $output = (int) $number;
    // $output = (integer) $number;

    var_dump($number);
    echo "<br>";
    var_dump($output);
    echo "<br>";
    echo $number;
    echo "<br>";
    echo gettype($output);
    echo "<hr>";



    $name = "Rahim";

    $output = (bool) $name;
    // $output = (boolean) $name;

    var_dump($output);
    echo "<br>";
    echo gettype($output);
    echo "<br>";
    echo $name;
    echo "<hr>";



    $score = 1114;
    $scoreboard = (array) $score;
    echo $scoreboard[0];            // Outputs 1114
    echo "<br>";
    echo "<pre>";
    var_dump($scoreboard);
    echo "<hr>";




    $model = "Toyota";
    $obj = (object) $model;
    
    print $obj->scalar; // returns "Toyota"
    echo"<br>";
    var_dump($obj);
    echo "<br>";
    print_r($obj);



?>