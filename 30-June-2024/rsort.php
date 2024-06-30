<?php
    // numaric
    $grades = array(42, 98, 100, 100, 43, 12);
    
    echo "<pre>";
    print_r($grades);
    echo "<br>";
    rsort($grades);
    
    print_r($grades);
    echo "<hr>";

    // alphabatic
    $locations = array("Italy", "Amsterdam", "Boston", "Des Moines", "Miami");

    print_r($locations);
    echo "<br>";
    rsort($locations);
    
    print_r($locations);

?>