<?php
    $states = array("Alabama", "Alaska", "Arizona", "Arkansas",
    "California", "Connecticut");

    echo "<pre>";
    print_r($states);
    echo "<hr>";
    // $subset = array_splice($states, 2, 1, array("New York", "Florida"));
    $subset1 = array_splice($states, 2, 2, array("New York", "Florida"));
    // $subset2 = array_splice($states, 2, -1, array("New York", "Florida"));
    // $subset3 = array_splice($states, 2, -2, array("New York", "Florida"));

    
    print_r($states);
    echo "<hr>";
    // print_r($subset);
    print_r($subset1);
    // print_r($subset2);
    // print_r($subset3);

?>