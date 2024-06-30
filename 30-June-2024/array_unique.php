<?php

    // array_unique() removes the duplicate values

    $states = array("Ohio", "Iowa", "Arizona", "Iowa", "Ohio");
    $uniqueStates = array_unique($states);

    echo "<pre>";
    print_r($states);
    echo "<br>";
    print_r($uniqueStates);

?>