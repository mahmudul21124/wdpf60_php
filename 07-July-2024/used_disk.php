<?php
    $c = 'c:';
    
    $total = disk_total_space($c);
    $free = disk_free_space($c);
    
    $used = $total - $free;

    echo $used/1024/1024/1024 . "GB" ;