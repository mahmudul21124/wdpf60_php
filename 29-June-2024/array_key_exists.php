<?php

    $students = array ("Tanim" => 20, "Saif" => 19, "Abdullah" => 22);

    if(array_key_exists("Tanim", $students)) {
        echo "Tanim got {$students['Tanim']}";
    }
    else {
        echo "Not found";
    }

?>