<?php

function myTest()
{
    static $x = 0;
    echo $x;
    // $x++;
    $x +=7;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
