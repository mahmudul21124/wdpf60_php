<?php
    $str = "Today is Saturday";
    $str2 = "Today is SaturDay";
    
    
    // echo strcasecmp($str, $str2);
    if(strcasecmp($str, $str2)==0){
        echo "String matched";
    }
    else{
        echo "String did not match";
    }