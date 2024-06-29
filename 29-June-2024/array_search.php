<?php

    $students = array ("Tanim" => 20, "Saif" => 19, "Abdullah" => 22);
    $found = array_search("19", $students);

    if($found) {
        echo "Found {$found} and he scored $students[$found].";
    }
    else {
        echo "Not found.";
    }

?>