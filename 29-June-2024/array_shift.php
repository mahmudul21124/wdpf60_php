<?php

    $states = array("Ohio", "New York", "California", "Texas");
    $state = array_shift($states);
    $state = array_shift($states);

    echo "<pre>";

    print_r($states);
    echo "<br>";
    echo $state;

?>