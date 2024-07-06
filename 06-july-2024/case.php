<?php

    $str = "today is saturday";

    echo "<b>strtoupper:</b> ". strtoupper($str);
    echo "<br>";
    $upper = strtoupper($str);

    echo "<b>strtolower:</b> ". strtolower($str);
    echo "<br>";

    echo "<b>ucfirst:</b> ". ucfirst($str);
    echo "<br>";

    echo "<b>lcfirst:</b> ".lcfirst($upper);
    echo "<br>";

    echo "<b>ucwords:</b> ".ucwords($str);
    



?>