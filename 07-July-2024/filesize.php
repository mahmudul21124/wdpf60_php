<?php

    $path = 'files/book.pdf';

    $mb =  filesize($path)/1024/1024;     // first 1024 for dividing into kb and the 2nd 1024 for dividing into mb
    
    echo round($mb,2) . " MB";



?>