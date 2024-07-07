<?php
    // $url = "sales@example.com";
    $url = "abcd.jpg";
    $withdot = strstr($url, ".");

    $withoutdot = ltrim($withdot, ".");

    echo ($withoutdot);
 ?>