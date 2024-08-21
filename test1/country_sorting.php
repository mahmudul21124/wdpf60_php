<?php

    $countries = [
        "USA" => "D.C",
        "Nepal" => "Kathmundo",
        "Uganda" => "Kampala",
        "Srilanka" => "Colombo",
        "Bangladesh" => "Dhaka",
        "Pakistan" => "Lahor",
    ];

    echo "<b> Before Sorting</b><br><br>";

    foreach($countries as $country => $capital){
        echo "$country : $capital <br>";
    }

    echo "<hr>";
    echo "<b> After Sorting</b><br><br>";

    ksort($countries);
    foreach($countries as $country => $capital){
        echo "$country : $capital <br>";
    }
    


?>