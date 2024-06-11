<?php
    $x = 10;
    $y = "Sunday";
    $z = array(10, 15, 20, 30);
    // $z = [10,15, 20, 30]; 

    var_dump($x);       // var_dump() for describing a variable. 
    echo "<br>";
    var_dump($y);
    echo "<br>";
    var_dump($z);
    echo "<br>";

    print_r($z);        // print_r() only for describing an array, it can not describe variables.
    
    echo "<br>";
    echo gettype($x);       // gettype can only show the type
?>