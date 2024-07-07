<?php
    $f = 'F:';
    
    $total = disk_total_space($f)/1024/1024/1024;

    echo round($total,2). " GB";
    echo "<hr>";

    $g = 'G:';
    
    $total1 = disk_total_space($g)/1024/1024/1024;

    echo round($total1,2). " GB";
    echo "<hr>";
?>