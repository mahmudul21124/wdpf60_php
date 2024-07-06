<?php
    $str = "Today is Saturday";
    // $str2 = "Today is Sunday";
    $str2 = "Today is saturday";
    
    // echo strcmp($str, $str2);    // if it matches then output will be 0, otherwise it will be -1

    // if($str == $str2){
    //     echo "String matched";
    // }
    if(strcmp($str, $str2)==0){
        echo "String matched";
    }
    else{
        echo "String did not match";
    }
    echo "<br>";

    
    $str = "Today is saturday";
    $str2 = "Today is SaturDay";
    
    
    // echo strcasecmp($str, $str2);
    if(strcasecmp($str, $str2)==0){
        echo "String matched";
    }
    else{
        echo "String did not match";
    }
?>