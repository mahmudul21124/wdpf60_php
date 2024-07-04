<?php

    $files = array(" picture1.jpg, picture10.jpg, picture3.jpg, picture18.jpg, picture15.jpg, picture20.jpg");

    sort($files);

    echo "<pre>";
    print_r($files);

    natsort($files);

    echo "<hr>";
    print_r($files);

?>