<?php

    $state = array("a" => "Delaware", "b" => "Pennsylvania", "c" => "New Jersey");

    echo "<pre>";
    print_r($state);
    echo "<br>";
    $state = array_flip($state);
    print_r($state);

?>