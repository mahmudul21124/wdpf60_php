<?php
    $country = array(
        "Bangladesh" => "Dhaka",
        "India" => "New delhi",
        "Japan" => "Tokyo",
        "Nepal" => "Kathmondo",
        "Uganda" => "Kampala"
    );

    while ($key = key($country)) {
        echo $key . "<br>";
        next($country);
    }
?>