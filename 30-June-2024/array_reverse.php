<?php

    $locations = array("Italy", "Amsterdam", "Boston", "Des Moines", "Miami");

    echo "<pre>";
    print_r($locations);
    echo "<br>"; 
    print_r(array_reverse($locations));
    echo "<br>";
    print_r(array_reverse($locations, 1));   //this method doesn't change the key. Just reverse the values.
    
    echo "<hr>";
    $grades = array(42, 98, 100, 100, 43, 12);

    print_r($grades);
    echo "<br>"; 
    print_r(array_reverse($grades));
    echo "<br>";
    print_r(array_reverse($grades, 1));

?>