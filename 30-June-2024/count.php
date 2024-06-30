<?php

    // count() & sizeof() are same thing.
    
    $fruits = array("Apple", "Orange", "Banana");

    echo count($fruits);

    $locations = array("Italy", "Amsterdam", array("Boston", "Des Moines"), "Miami");

    echo "<br>";
    echo count($locations);                         
    echo "<br>";
    echo count($locations, 1);
    echo "<br>";
    echo sizeof($locations);
    echo "<br>";
    echo sizeof($locations,1);

?>