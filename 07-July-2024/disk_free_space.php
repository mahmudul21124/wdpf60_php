<?php
    $f = 'F:';
    
    $free = disk_free_space($f)/1024/1024/1024;

    echo round($free,2). " GB";
    echo "<hr>";

    $g = 'G:';
    
    $free1 = disk_free_space($g)/1024/1024/1024;

    echo round($free1, 2). " GB";
    echo "<hr>";
?>