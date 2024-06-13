<?php
    echo "<pre>";
    // print_r ($_SERVER);

    echo $_SERVER['REQUEST_METHOD'];
    echo '<br>';
    
    echo $_SERVER['REMOTE_ADDR'];
    echo '<br>';
    echo $_SERVER['REQUEST_URI'];
    echo '<br>';
    echo $_SERVER['HTTP_USER_AGENT'];

?>