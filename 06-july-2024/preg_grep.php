<?php
    $foods = array("pasta", "steak", "fish", "potatoes");
    $food = preg_grep("/^p/", $foods);              // ^ it will search the starting character
    $food1 = preg_grep("/h$/", $foods);             // $ it will search the ending character

    echo "<pre>";
    print_r($food);
    print_r($food1);
?>