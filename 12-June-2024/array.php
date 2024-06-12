<?php

    // Numeric indexed array
    $rivers = array("Padma", "Meghna", "Jamuna", "Surma");

    echo"<pre>";
    print_r($rivers);


    // $rivers[]= "Tista";
    // $rivers[]= "Gomti";

    $rivers[10]= "Tista";
    $rivers[11]= "Gomti";
    print_r($rivers);
    echo "<hr>";

    
    // Associative array

    // $capitals = array("Bangladesh"=>"Dhaka", "Srilanka"=>"Colombo", "Nepal"=>"Kathmondu");
    $capitals = ["Bangladesh"=>"Dhaka", "Srilanka"=>"Colombo", "Nepal"=>"Kathmondu"];


    print_r($capitals);

    $capitals["Bhutan"] = "Thimpu";
    print_r($capitals);


    ?>
