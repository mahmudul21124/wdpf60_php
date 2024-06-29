<?php

    // Array

    $fruits = array("Mango", "Orange", "Apple", "Jackfruit", "Graps", "Guava");

    echo "<ol>";
    foreach ($fruits as $x) {
        echo "<li>" . $x . "</li>";
    }
    echo "</ol>";

    echo "<hr>";


    // Associative array

    $students = array ("Tanim" => 20, "Saif" => 19, "Abdullah" => 22);

    foreach ($students as $name => $age)  {
        echo "$name : $age  <br>";
    }
?>